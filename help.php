<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/11/17
 * Time: 5:30
 */
?>
<html>
<head lang="en">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" type="text/css" href="./css/base.css"/>
    <script src="./js/jquery-1.8.2.min.js"></script>
    <title>接力助跑 赢100元餐饮现金券</title>
</head>
<body>
<div class="wrap w-100">
    <div class="wrap_above w-100">

        <div class="share_box" style="display: none" id="shareBox">       <!--       分享给好友弹出框-->
            <img src="images/share.png"  style="width: 80%" alt=""/>
        </div>



       <div  class="showBox1" id="showbox1" style="display: none;">      <!--兑换失败弹出框      -->
           <img src="images/weipaowan.png" alt=""/>
       </div>



        <div  class="showBox2" id="showbox2" style="display: none;">        <!--兑换成功弹出框       -->
            <img src="images/gongxizhongjiang.png" id="winningBtn" alt=""/>
        </div>



        <div class="showBox4 w-100" id="showbox4" style="display: none" >     <!--兑换成功后信息输入框     -->
            <div class="info-wrap">
                <form action="http://www.baidu.com" id="info_form">
                    <input class="caption" type="text" placeholder="姓名：" />
                    <input class="caption" type="text" placeholder="电话：" />
                </form>
                <p>领取奖品请在下方选择所在城市万达广场</p>
                <div class="big_box">
                    <div class="choose">
                        <p>---请选择---</p>
                    </div>
                    <div style="width: 100%;text-align: center;margin: 0 auto;background-color: #e7636e;">
                        <div class="select_box">
                            <select class="place_choose" size="6" form="info_form">
                                <option value="合肥包河万达广场"><p>合肥包河万达广场</p></option>
                                <option value="天鹅湖万达广场">合肥天鹅湖万达广场</option>
                                <option value="芜湖万达广场">芜湖镜湖万达广场</option>
                                <option value="蚌埠万达广场">蚌埠万达广场</option>
                                <option value="马鞍山万达广场">马鞍山万达广场</option>
                                <option value="阜阳万达广场">阜阳颍州万达广场</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_box" >
                <a href="javascript:infoSubmit()"><img style="width: 40%" src="./images/sure.png" alt=""/></a>
            </div>
        </div>

<!--背景大图-->
        <img class="w-100 bg-pic"  src="./images/bg-pic0.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic1.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic2.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic3.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic4.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic5.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic6.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic7.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic8.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic9.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic10.jpg" alt=""/>
        <img class="w-100 bg-pic"  src="./images/bg-pic.jpg" alt=""/>
        <div class="button-box">
            <table class="w-100" style="margin:0 auto" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <th><a href="javascript:shareBtn()"><img style="width: 42%" src="./images/help.png" alt=""/></a></th>         <!--              请好友帮忙按钮-->
                </tr>
                <tr>
                    <th><a href=""><img class="button_bottom" style="width: 42%" src="./images/duihuan.png" alt=""/></a></th>     <!--                    兑换按钮-->
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="wrap_bottom w-100">
        <img class="w-100" src="./images/footer.jpg" alt=""/>
    </div>
    <div class="friend_box">
        <p class="friend_help">帮忙的小伙伴们</p>
        <div class="friend">
            <img src="images/touxiang.png" class="friend_head" alt=""/>
            <div class="friend_info">
                <p class="name"><span style="color:red">周晓辉</span>帮忙接力助跑</p>
                <p class="time">2105-11-18 18:18</p>
            </div>
        </div>
    </div>
</div>

<div id="d-mask" style="display:none"></div>
<script>
    $(".wrap_above .bg-pic:not(:eq(0))").hide();
</script>
<script>
    function shareBtn(){
        document.getElementById("d-mask").style.display="block";        //分享给好友弹出框
        document.getElementById("shareBox").style.display="block";
    }
    $(document).ready(function(){
        $("#d-mask,#shareBox").click(function(){
            $("#d-mask").css({"display":"none"});                       //关闭分享弹出框
            $("#shareBox").css({"display":"none"})
        });
    });
    $(document).ready(function(){
        $("#showbox1").click(function(){
            $("#d-mask").css({"display":"none"});                      //关闭兑换失败弹出框
            $("#showbox1").css({"display":"none"})
        });
        $("#d-mask").click(function(){
            $("#d-mask").css({"display":"none"});                     //关闭兑换成功弹出框
            $("#showbox2").css({"display":"none"});
            $("#showbox4").css({"display":"none"})                   //关闭信息输入弹出框
        });
        $("#winningBtn").click(function(){
            $("#showbox2").css({"display":"none"});                   //信息输入弹出框
            $("#showbox4").css({"display":"block"})
        });
    });
    function infoSubmit(){
        document.getElementById("info_form").submit();                //form提交
    }

</script>
</body>
</html>