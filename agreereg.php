<?php
 include("top.php");
?>
    <html>
    <head>
        <meta charset="gb2312" />
        <title></title>
        <link rel="stylesheet" href="css/reset.css" />
        <style type="text/css">
            #center_box{
                margin: 10px auto;
                width:1181px;
                height:570px;
            }
            #center_box #one{
                width:370px;
                height:550px;
                background-color:#f5f5f5;
                border:10px solid #202541;
                float:right;
            }
            #center_box #one img{
                margin:10px 0;
            }
            #center_box #one #one1{
                width:240px;
                height:460px;
                margin:0px auto;
            }
            /*最外围的div*/
            #center_box #two{
                padding-top:20px;
                width:800px;
                height:550px ;
                background:#F5F5F5;
            }
            #center_box #container {
                width: 600px;
                height: 400px;
                overflow: hidden;
                position: relative; /*相对定位*/
                border:10px solid #202541;
                margin:30px auto;
            }

            /*包含所有图片的<div>*/
            #list {
                width: 4200px; /*7张图片的宽*/
                height: 400px;
                position: absolute; /*绝对定位*/
                z-index: 1; /*???*/
            }

            /*所有的图片<img>*/
            #list img {
                float: left; /*浮在左侧*/
            }

            /*包含所有圆点按钮的<div>*/
            #buttons {
                position: absolute;
                height: 10px;
                width: 100px;
                z-index: 2;
                bottom: 20px;
                left: 250px;
            }

            /*所有的圆点<span>*/
            #buttons span {
                cursor: pointer;
                float: left;
                border: 1px solid #fff;
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: #333;
                margin-right: 5px;
            }

            /*第一个<span>*/
            #buttons .on {
                background: orangered;
            }

            /*切换图标<a>*/
            .arrow {
                cursor: pointer;
                display: none;
                line-height: 39px;
                text-align: center;
                font-size: 36px;
                font-weight: bold;
                width: 40px;
                height: 40px;
                position: absolute;
                z-index: 2;
                top: 180px;
                background-color: RGBA(0, 0, 0, 0.3);
                color: #fff;
            }

            /*鼠标移到切换图标上时*/
            .arrow:hover {
                background-color: RGBA(0, 0, 0, 0.7);
            }

            /*鼠标移到整个div区域时*/
            #container:hover .arrow {
                display: block; /*显示*/
            }

            /*上一个切换图标的左外边距*/
            #prev {
                left: 20px;
            }

            /*下一个切换图标的右外边距*/
            #next {
                right: 20px;
            }
            #center_box1 #div1 .d_center .d1{
                position: relative;
            }
            #center_box1 #div1 .d_center .d1 img{
                position: absolute;
                top:9px;
            }
            #center_box1 #div1 .d_center .d1 h1{
                position: absolute;
                left:62px;
                top:10px;
            }
            #center_box1 #div1 .d_center .d1 #p1{
                position: absolute;
                left:62px;
                top:30px;
                font-size:13px;
            }
            #center_box1 #div1 .d_center .d1 #p2{
                position: absolute;
                left:62px;
                top:48px;
                font-size:13px;
            }
            #center_box1 #div1 .d_center .d2{
                position: relative;
            }
            #center_box1 #div1 .d_center .d2 img{
                position: absolute;
                top:9px;
            }
            #center_box1 #div1 .d_center .d2 h1{
                position: absolute;
                left:62px;
                top:10px;
            }
            #center_box1 #div1 .d_center .d2 #p1{
                position: absolute;
                left:62px;
                top:30px;
                font-size:13px;
            }
            #center_box1 #div1 .d_center .d2 #p2{
                position: absolute;
                left:62px;
                top:48px;
                font-size:13px;
            }
            #center_box1 #div1 .d_center .d3{
                position: relative;
            }
            #center_box1 #div1 .d_center .d3 img{
                position: absolute;
                top:9px;
            }
            #center_box1 #div1 .d_center .d3 h1{
                position: absolute;
                left:62px;
                top:10px;
            }
            #center_box1 #div1 .d_center .d3 #p1{
                position: absolute;
                left:62px;
                top:30px;
                font-size:13px;
            }
            #center_box1 #div1 .d_center .d3 #p2{
                position: absolute;
                left:62px;
                top:48px;
                font-size:13px;
            }
            #center_box1 #div1 .d_center .d4{
                position: relative;
            }
            #center_box1 #div1 .d_center .d4 img{
                position: absolute;
                top:9px;
            }
            #center_box1 #div1 .d_center .d4 h1{
                position: absolute;
                left:62px;
                top:10px;
            }
            #center_box1 #div1 .d_center .d4 #p1{
                position: absolute;
                left:62px;
                top:30px;
                font-size:13px;
            }
            #center_box1 #div1 .d_center .d4 #p2{
                position: absolute;
                left:62px;
                top:48px;
                font-size:13px;
            }
            #center_box1 #div3{
                position: relative;
            }
            #center_box1 #div3 img{
                margin-top: 20px;
                margin-left: 8px;
            }
            #center_box1 #div3 #ha{
                position: absolute;
                top:221px;
                left:20px;
            }
            #center_box1 #div3 #pa{
                position: absolute;
                top:251px;
                left:20px;
                font-size:15px;
            }
            #center_box1 #div3 #hb{
                position: absolute;
                top:221px;
                left:320px;
            }
            #center_box1 #div3 #pb{
                position: absolute;
                top:251px;
                left:320px;
                font-size:15px;
            }
            #center_box1 #div3 #hc{
                position: absolute;
                top:221px;
                left:611px;
            }
            #center_box1 #div3 #pc{
                position: absolute;
                top:251px;
                left:611px;
                font-size:15px;
            }
            #center_box1 #div3 #hd{
                position: absolute;
                top:221px;
                left:902px;
            }
            #center_box1 #div3 #pd{
                position: absolute;
                top:251px;
                left:902px;
                font-size:15px;
            }
            #center_box1 #div5{
                position:relative;
            }
            #center_box1 #div5 img{
                position:absolute;
                top:34px;
                left:20px;
            }
            #center_box1 #div5 #z5{
                position:absolute;
                top:34px;
                left:419px;
                width:742px;
                height:231px;
            }
            #center_box1 #div5 #z5 p{
                margin-top:10px ;
            }
            #center_box1 #div4{
                position:relative;
            }
            #center_box1 #div4 #dz1{
                position:absolute;
                width:300px;
                height:300px;
                left:70px;
            }
            #center_box1 #div4 #dz1 img{
                position:absolute;
                top:81px;
                left:101px;
            }
            #center_box1 #div4 #dz1 h1{
                position:absolute;
                top:199px;
                left:125px;
                font-size:25px;
            }
            #center_box1 #div4 #dz1 p{
                position:absolute;
                top:239px;
                left:35px;
                font-size:18px;
            }
            #center_box1 #div4 #dz2{
                position:absolute;
                width:300px;
                height:300px;
                left:440px;
            }
            #center_box1 #div4 #dz2 img{
                position:absolute;
                top:81px;
                left:101px;
            }
            #center_box1 #div4 #dz2 h1{
                position:absolute;
                top:199px;
                left:125px;
                font-size:25px;
            }
            #center_box1 #div4 #dz2 p{
                position:absolute;
                top:239px;
                left:85px;
                font-size:18px;
            }
            #center_box1 #div4 #dz3{
                position:absolute;
                width:300px;
                height:300px;
                left:810px;
            }
            #center_box1 #div4 #dz3 img{
                position:absolute;
                top:81px;
                left:101px;
            }
            #center_box1 #div4 #dz3 h1{
                position:absolute;
                top:199px;
                left:126px;
                font-size:25px;
            }
            #center_box1 #div4 #dz3 p{
                position:absolute;
                top:239px;
                left:95px;
                font-size:18px;
            }
            a{
                text-decoration: none;
            }

        </style>
        <link rel="stylesheet" href="css/center_box1.css"/>
        <link rel="stylesheet" href="css/footer.css"/>
    </head>
    <body>
    <div id="center_box">
        <div id="one">
            <img src="images/sb.png" width="370px">
          <div id="one1">
                <?php include("right.php");?>
            </div>
        </div>
        <div id="two">
            <p style="font-size:30px;" align="center">某某酒店</p>
            <div id="container">
                <div id="list" style="left: -600px;">
                    <img src="images/a55.png" alt="5"/>
                    <img src="images/a11.png" alt="1"/>
                    <img src="images/a22.png" alt="2"/>
                    <img src="images/a33.png" alt="3"/>
                    <img src="images/a44.png" alt="4"/>
                    <img src="images/a55.png" alt="5"/>
                    <img src="images/a11.png" alt="1"/>
                </div>
                <div id="buttons">
                    <span index="1" class="on"></span>
                    <span index="2"></span>
                    <span index="3"></span>
                    <span index="4"></span>
                    <span index="5"></span>
                </div>
                <a href="javascript:;" id="prev" class="arrow">&lt;</a>
                <a href="javascript:;" id="next" class="arrow">&gt;</a>
            </div>
        </div>
        <script type="text/javascript">
            /*
             功能说明:
             1. 点击向右(左)的图标, 平滑切换到下(上)一页
             2. 无限循环切换: 第一页的上一页为最后页, 最后一页的下一页是第一页
             3. 每隔3s自动滑动到下一页
             4. 当鼠标进入图片区域时, 自动切换停止, 当鼠标离开后,又开始自动切换
             5. 切换页面时, 下面的圆点也同步更新
             6. 点击圆点图标切换到对应的页
             */
            /**
             * 根据id得到对应的标签对象
             * @param {Object} id
             */
            function $(id) {
                return document.getElementById(id);
            }
            /**
             * 给指定id对应的元素绑定点击监听
             * @param {Object} id
             * @param {Object} callback
             */
            function click(id, callback) {
                $(id).onclick = callback;
            }

            window.onload = function () {

                var listDiv = $("list");
                var totalTime = 400;//换页的总时间
                var intervalTime = 20;//移动的间隔时间
                var intervalId;//循环定时器的id(翻页中的不移动)
                var imgCount = 5; //图片的个数
                var moveing = false; //是否正在移动中
                var index = 0;//当前显示图片的下标(从0开始到imgCount-1)
                var buttonSpans = $("buttons").children; //所有标识圆点标签的集合
                var containerDiv = $("container");
                var intervalId2; //循环定时器的id(自动翻页)

                //给下一页绑定点击监听
                click("next", function () {
                    //切换到下一页
                    nextPage(true);
                });

                //给上一页绑定点击监听
                click("prev", function () {
                    //切换到上一页
                    nextPage(false);
                });

                //给所有的提示圆点绑定点击监听
                clickButtons();

                //启动定时自动翻页
                autoNextPage();
                //给容器div绑定鼠标移入的监听: 停止自动翻页
                containerDiv.onmouseover = function () {
                    clearInterval(intervalId2);
                }
                //给容器div绑定鼠标移出的监听: 启动自动翻页
                containerDiv.onmouseout = function () {
                    autoNextPage();
                };

                /**
                 * 启动定时自动翻页
                 */
                function autoNextPage() {
                    intervalId2 = setInterval(function () {
                        nextPage(true);
                    }, 2000);
                }

                /**
                 * 切换到下一页/上一页
                 * true 下
                 * false 上
                 * index 目标页
                 * @param {Object} next true
                 */
                function nextPage(next) {

                    //如果正在移动, 直接结束
                    if (moveing) {
                        return;
                    }
                    //标识正在移动
                    moveing = true;

                    //需要进行的总偏移量
                    var offset;
                    if (typeof next === 'boolean') {
                        offset = next ? -600 : 600;
                    } else {
                        offset = -600 * (next - index);
                    }
                    //var offset = next ? -600 : 600;
                    //每个小移动需要做的偏移量
                    var itemOffset = offset / (totalTime / intervalTime);
                    //切换完成时div的left的坐标
                    var targetLeft = listDiv.offsetLeft + offset;
                    //循环定时器
                    intervalId = setInterval(function () {
                        //var currentLeft = listDiv.offsetLeft;
                        //得到当前这次偏移的样式left坐标
                        var left = listDiv.offsetLeft + itemOffset;
                        //如果已经到达目标位置
                        if (left == targetLeft) {
                            //移除定时器
                            clearInterval(intervalId);

                            //如果当前到达的是最左边的图片, 跳转到右边第二张图片的位置
                            if (left == 0) {
                                left = -imgCount * 600;
                            } else if (left == -600 * (imgCount + 1)) {//如果当前到达的是最右边的图片, 跳转到左边第二张图片的位置
                                left = -600;
                            }
                            //标识没有移动了
                            moveing = false;
                        }
                        //指定div新的left坐标
                        listDiv.style.left = left + "px";
                    }, intervalTime);

                    //更新标识圆点
                    updateButtons(next);
                }

                /**
                 * 更新标识圆点
                 * @param {Object} next
                 */
                function updateButtons(next) {
                    //将当前的圆点更新为一般圆点
                    buttonSpans[index].removeAttribute("class");
                    //计算出目标圆点的下标
                    var targetIndex;
                    if (typeof next == 'boolean') {
                        if (next) {
                            targetIndex = index + 1;
                            if (targetIndex == imgCount) {
                                targetIndex = 0;
                            }
                        } else {
                            targetIndex = index - 1;
                            if (targetIndex == -1) {
                                targetIndex = imgCount - 1;
                            }
                        }
                    } else {
                        targetIndex = next;
                    }
                    //将标圆点的下标更新为当前下标
                    index = targetIndex;
                    //将目标圆点设置为当前圆点
                    buttonSpans[index].className = 'on';
                }

                /**
                 * 给所有的圆点设置点击监听
                 */
                function clickButtons() {
                    for (var i = 0, length = buttonSpans.length; i < length; i++) {

                        buttonSpans[i].index = i;
                        buttonSpans[i].onclick = function () {
                            nextPage(this.index);
                        };

                    }
                }
            };
        </script>
    </div>
    <div id="center_box1">
        <div id="div1">
            <p align="center" style="font-size:36px;font-family:微软雅黑 ;" class="p1"><b>News and</b> </p>
            <p align="center" style="font-size:20px;font-family:微软雅黑 ;">/ 网站新闻 /</p>
            <div class="d_center">
                <div class="d1">
                    <img src="images/z.png"><h1>出境提示：旅游局提示暂缓赴牙买加旅游</h1>
                    <p id="p1">从国家旅游局网站获悉,牙买加首都金斯敦发生骚乱，国家旅游局发出</p>
                    <p id="p2">紧急出行提示，请中国游客暂缓赴牙买加旅游。</p>
                </div>
                <div class="d2">
                    <img src="images/z.png"><h1>以色列入境旅游增速显著2012欲达全球400万游客</h1>
                    <p id="p1">记者从以色列旅游局北京办事处获悉，今年4月份共有31.7万旅游者到访</p>
                    <p id="p2">比2009年同期增长了26%与历史较高记录的2008年相比也增加了9%。</p>
                </div>
                <div class="d3">
                    <img src="images/z.png"><h1>美联航客机遇乱流下坠 致至少6名乘客受伤</h1>
                    <p id="p1">据香港“星岛日报网”报道，周二，一架美国联合航空公司由伦敦飞</p>
                    <p id="p2">往洛杉矶的班机途中遇到气流，紧急降落，导致至少6名乘客受伤。</p>
                </div>
                <div class="d4">
                    <img src="images/z.png"><h1>个人赴日游门槛降低 持信用卡金卡可申请签证</h1>
                    <p id="p1">近日日本外务省正式宣布，从今年7月1日起全面扩大中国公民赴日旅游</p>
                    <p id="p2">签证申请范围，主要包括扩大了受理地域范围，扩大了申请人群的范围。</p>
                </div>
            </div>
        </div>
        <p align="center" style="font-size:36px;font-family:微软雅黑 ;" class="p1"><b>Support Services</b> </p>
        <p align="center" style="font-size:20px;font-family:微软雅黑 ;">/ 服务项目 /</p>
        <div id="div2">
            <img src="images/1.png" class="img1">
            <img src="images/2.png" class="img2">
            <img src="images/3.png" class="img3">
            <img src="images/4.png" class="img4">
        </div>
        <p align="center" style="font-size:36px;font-family:微软雅黑 ;" class="p1"><b>Hotel Reservation</b> </p>
        <p align="center" style="font-size:20px;font-family:微软雅黑 ;">/ 在线预订 /</p>
        <div id="div3">
            <img src="images/z1.png">
            <img src="images/z2.png">
            <img src="images/z3.png">
            <img src="images/z4.png">
            <h1 id="ha">高级大床房</h1>
            <p id="pa">官方预订价：<b style="font-size:18px;color:red;">599.00</b></p>
            <h1 id="hb">豪华大床房</h1>
            <p id="pb">官方预订价：<b style="font-size:18px;color:red;">699.00</b></p>
            <h1 id="hc">豪华行政套房</h1>
            <p id="pc">官方预订价：<b style="font-size:18px;color:red;">1199.00</b></p>
            <h1 id="hd">行政大床房</h1>
            <p id="pd">官方预订价：<b style="font-size:18px;color:red;">899.00</b></p>
        </div>
        <p align="center" style="font-size:36px;font-family:微软雅黑 ;" class="p1"><b>Online Message</b> </p>
        <p align="center" style="font-size:20px;font-family:微软雅黑 ;">/ 在线留言 /</p>
        <div id="div4">
            <div id="dz1">
                <img src="images/3_jwvp.png">
                <h1>地址</h1>
                <p>广州市天河区XX路XX街XX号</p>
            </div>
            <div id="dz2">
                <img src="images/1_h7qi.png">
                <h1>电话</h1>
                <p>400 - 000 - 000</p>
            </div>
            <div id="dz3">
                <img src="images/2_gww5.png">
                <h1>QQ</h1>
                <p>1234567890</p>
            </div>
        </div>
        <p align="center" style="font-size:36px;font-family:微软雅黑 ;" class="p1"><b>About Us</b> </p>
        <p align="center" style="font-size:20px;font-family:微软雅黑 ;">/ 关于我们 /</p>
        <div id="div5">
            <img src="images/us.png">
            <div id="z5">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xx酒店成立于1990年，坐落在“全国工业旅游示范点”的xxx集团公司，是集旅游观光，餐饮、住宿</p>
                <p>会议接 待，商务活动等三星级涉外酒店(现正在积极申报四星)。酒店整个建筑为仿古庭院式建筑，占地—</p>
                <p>万三千二百平方米，酒店开业十多年来，始终瞄准向国内一流酒 店学习，通过科学管理，培养了一大批管</p>
                <p>理人才，取得了不菲的成绩。xx酒店曾 被国家旅游局评为“全国较佳星级饭店”；客务部曾被团省委、省</p>
                <p>劳动厅、省 旅游局命名为“青年文明号”；餐务部在参加全省组织的全国烹饪和省内比赛中，共获得</p>
                <p>金、银、铜奖牌16枚的好成绩，餐厅服务员还在参加全省组织的全国业务技能选拨大赛中获得“优秀选</p>
                <p>手”的光荣称号。</p>
            </div>
        </div>
        <div>
        <table width="1181" height="280" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="20" bgcolor="#632916"><div align="center" style="color: #FFFFFF;">会员协议书</div></td>
            </tr>

            <tr>
                <td height="255">
                    <table width="1181" height="200" border="0" align="center" cellpadding="0" cellspacing="1">
                        <tr>
                            <td height="200" bgcolor="#F5F5F5" valign="top">
                                <DIV style="HEIGHT:200px;WIDTH:450px;margin: auto; " >
                                    <br>
                                    <h1 align="center"> 用户协议</h1><br>
                                    欢迎您注册为本论坛的用户,作为论坛用户必须要遵守以下协议:<br><br>
                                    1 不得违反国家的法律法规;<br><br>
                                    2 诚实进行商品交易;<br><br>
                                    3 管理员有权删除您的信息,留言等;<br><br>
                                    4 不得发表不文明的言论;<br><br>
<tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="25" bgcolor="#FFFFFF"><div align="center"><button><a href="index.php">我不同意</a></button>&nbsp;&nbsp;<button><a href="reg.php">我同意</a></button></div></td>
                        </tr>

        </DIV>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    </div>
    <?php
    include("bottom.php");
    ?>
    </body>
    </html>
