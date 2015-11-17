<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/11/17
 * Time: 1:10
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
    <!--    蚌埠弹出框-->
    <div class="showbox6 w-100" id="bengbu" style="display: none">
        <img src="./images/bengbu.png" alt=""/>
    </div>
    <!--    阜阳弹出框-->
    <div class="showbox6 w-100" id="fuyang" style="display: none">
        <img src="./images/fuyang.png" alt=""/>
    </div>
    <!--    马鞍山弹出框-->
    <div class="showbox6 w-100" id="maanshan" style="display:none">
        <img src="./images/maanshan.png" alt=""/>
    </div>
    <!--    天鹅湖弹出框-->
    <div class="showbox6 w-100" id="tianehu" style="display: none">
        <img src="./images/tianehu.png" alt=""/>
    </div>
    <!--    包河弹出框-->
    <div class="showbox6 w-100" id="baohe" style="display: none">
        <img src="./images/baohe.png" alt=""/>
    </div>
    <!--    芜湖弹出框-->
    <div class="showbox6 w-100" id="wuhu" style="display: none">
        <img src="./images/wuhu.png" alt=""/>
    </div>
    <img class="icon_btn bengbuBtn" src="images/touxiang.png" alt=""/>
    <img class="icon_btn fuyangBtn" src="images/btn.png" alt=""/>
    <img class="icon_btn maanshanBtn" src="images/btn.png" alt=""/>
    <img class="icon_btn tianehuBtn" src="images/btn.png" alt=""/>
    <img class="icon_btn baoheBtn" src="images/btn.png" alt=""/>
    <img class="icon_btn wuhuBtn" src="images/btn.png" alt=""/>


    <div class="wrap_above w-100">
<!--        规则弹出框-->
        <div class="floating w-100" id="showbox">
            <div class="floating-box">
                <div class="w-100">
                    <table class="w-100" style="margin:0 auto;" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <th class="floating-head"><img style="width: 58%" src="./images/guize-head.png" alt=""/></th>
                        </tr>
                        </tbody>
                    </table>
                    <div class="floating-content">
                        <div class="floating-text">
                            <p>活动只支持微信平台，用户微信登陆后发起开跑，邀请朋友帮忙接力点亮所有万达广场图标，在活动期间完成任务目标，点击“兑换按钮” ，填写姓名及联系方式，店庆期间到安徽各万达店领取现金券。</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!--规则弹出框end！！-->
        <img class="w-100"  src="./images/bg-pic.jpg" alt=""/>
        <div class="button-box">
            <table class="w-100" style="margin:0 auto" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <th><a href="javascript:guizeBtn()" id="guizeBtn"><img style="width: 37%" src="./images/guize.png" alt=""/></a></th>
                </tr>
                <tr>
                    <th><a href="help.php"><img class="button_bottom" style="width: 37%" src="./images/begin.png" alt=""/></a></th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="wrap_bottom w-100">
        <img class="w-100" src="./images/footer.jpg" alt=""/>
    </div>
</div>

<div id="d-mask" style="display:none"></div>
<script>
    function guizeBtn(){
        document.getElementById("d-mask").style.display="block";         //规则弹出框
        document.getElementById("showbox").style.display="block";
    }
    $(document).ready(function(){
        $("#d-mask").click(function(){                                 //关闭规则弹出框
            $("#d-mask").css({"display":"none"});
            $("#showbox").css({"display":"none"})
        });

        $(".bengbuBtn").click(function(){
            $("#d-mask,#bengbu").css({"display":"block"});
        });                                                              //蚌埠开关
        $("#d-mask,#bengbu").click(function(){
            $("#d-mask,#bengbu").css({"display":"none"});
        });

        $(".fuyangBtn").click(function(){
            $("#d-mask,#fuyang").css({"display":"block"});
        });                                                              //阜阳开关
        $("#d-mask,#fuyang").click(function(){
            $("#d-mask,#fuyang").css({"display":"none"});
        });

        $(".maanshanBtn").click(function(){
            $("#d-mask,#maanshan").css({"display":"block"});
        });                                                              //马鞍山开关
        $("#d-mask,#maanshan").click(function(){
            $("#d-mask,#maanshan").css({"display":"none"});
        });

        $(".tianehuBtn").click(function(){
            $("#d-mask,#tianehu").css({"display":"block"});
        });                                                              //天鹅湖开关
        $("#d-mask,#tianehu").click(function(){
            $("#d-mask,#tianehu").css({"display":"none"});
        });

        $(".baoheBtn").click(function(){
            $("#d-mask,#baohe").css({"display":"block"});
        });                                                              //包河开关
        $("#d-mask,#baohe").click(function(){
            $("#d-mask,#baohe").css({"display":"none"});
        });

        $(".wuhuBtn").click(function(){
            $("#d-mask,#wuhu").css({"display":"block"});
        });                                                              //芜湖开关
        $("#d-mask,#wuhu").click(function(){
            $("#d-mask,#wuhu").css({"display":"none"});
        });


    });
</script>
</body>
</html>