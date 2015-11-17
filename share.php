<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/11/17
 * Time: 14:58
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
        <!--        助跑成功弹出框-->
        <div class="showBox3" style="display:none" id="showbox3">
            <img src="images/zhupaosuccess.png"  style="width: 100%" alt=""/>
            <div class="showBox3_text w-100"><p style="width:80%;margin: 0 auto">恭喜您帮<span>XXX</span>成功助跑!</p></div>
        </div>
        <!--        助跑成功弹出框 end!!!-->


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
                    <th><a href=""><img style="width: 42%" src="./images/helpHim.png" alt=""/></a></th>
                </tr>
                <tr>
                    <th><a href="index.php"><img class="button_bottom" style="width: 42%" src="./images/join.png" alt=""/></a></th>
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
    $(".wrap_above .bg-pic:not(:eq(0))").hide();
</script>
<script>
    $(document).ready(function(){
        $("#showbox3").click(function(){
            $("#d-mask").css({"display":"none"});
            $("#showbox3").css({"display":"none"})
        });
    });
</script>
</body>
</html>