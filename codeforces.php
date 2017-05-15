<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="js/jquery-3.1.1.js"></script>
    <script>

        // 惯性滑块
        var pos = 0;
        $(document).ready(function () {
            var bg = $("div.bgm");
            $("li.ji").hover(
                function () {
                    var fu;
                    if (this.id == pos) {
                        fu = '=';
                    }
                    else if (this.id > pos) {
                        fu = '-';
                    }
                    else {
                        fu = '+';
                    }

                    pos = this.id;

                    var id = this.id;
                    if (fu == '=' && id != 0) {
                        bg.stop();
                        bg.stop();
                        var a = this.id * 120 + 40 + 20 + 'px';
                        bg.animate({left: a}, 400);
                        bg.animate({left: '-=20px'}, 400);
                    }
                    else if (fu == '-') {
                        bg.stop();
                        bg.stop();
                        var a = this.id * 120 + 40 + 20 + 'px';
                        bg.animate({left: a}, 400);
                        bg.animate({left: '-=20px'}, 400);
                    }
                    else if (fu == '+') {
                        bg.stop();
                        bg.stop();
                        var b = this.id * 120 + 40 - 20 + 'px';
                        bg.animate({left: b}, 400);
                        bg.animate({left: '+=20px'}, 400);
                    }
//                        pos = this.id;
                },
                function () {
//                        alert(this.id*120);
                    if (pos != 0) {

                        bg.stop();
                        bg.stop();
                        bg.animate({left: '20px'}, 400);
                        bg.animate({left: '40px'}, 400, function () {
                            pos = 0;
                        });
                    }

                }
            );

            // 头部底色变换
            var yuan = 'white';
            var color_chose = $("li.col");
            color_chose.click(
                function () {
                    if (yuan != this.style.backgroundColor) {
                        var sp = $("div#spread");
                        yuan = this.style.backgroundColor;
                        sp.css("background-color", yuan);
                        sp.animate({width: '100%'}, function () {
                            $("div#main").css("background-color", yuan);
                            sp.css("width", "0");
                        });
                    }
                }
            );

            var colch1 =$("div.colch1");
            var bd=$("div.background_color");
            colch1.click(
                function () {
                    var yan = this.style.backgroundColor;
                    bd.css("background-color", 'yellow');
                }
            );
        });



    </script>
    <style>
        ul.ki {
            /*display: inline;*/
            padding: 0;
            margin: 0;
        }

        li.ji {
            position: relative;
            z-index: 2;
            margin: 10px;
            /*background-color: #19f246;*/
            width: 100px;
            height: 50px;
            line-height: 50px;
            float: left;
            list-style: none;
            color: white;
        }

        div.bgm {
            left: 40px;
            top: 30px;
            position: absolute;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            /*left: 127px;*/
            width: 60px;
            height: 30px;
            z-index: 0;
        }

        li.col {
            /*float: left;*/
            /*border-radius: 10px;*/
            width: 20px;
            height: 20px;
            list-style: none;
            position: relative;
            z-index: 4;
        }

        #colorchose {
            width: 60px;
            position: absolute;
            z-index: 100;
            padding: 0;
            margin: 0;
            left: -20px;
            transition: 0.5s;
        }

        #colorchose:hover {
            left: 0;
            transition: 0.5s;
        }

        #colrow {
            position: fixed;
            left: 40px;
            top: 70%;
            height: 80px;
            width: 80px;
            border-radius: 40px;

            transition: 0.2s;
        }

        #colrow div {
            position: absolute;
            z-index: 50;
            left: 20px;
            top: 20px;
            width: 37px;
            height: 37px;
            border-radius: 20px;
            border: 2px white solid;
            transition: 0.5s;
            transition-delay: 0.5s;
            opacity: 0;

        }

        #colrow:hover img{
            transform:rotate(360deg);
            transition: 0.2s ease-in-out;
        }

        #colrow:hover .colch1 {
            background-color: #ff4500;
            top: 20px;
            left: -60px;
            transition: 0.2s;
            opacity: 1;
        }

        #colrow:hover .colch2 {
            background-color: #feff00;
            top: -40px;
            left: -40px;
            transition: 0.2s;
            transition-delay: 0.05s;
            opacity: 1;
        }

        #colrow:hover .colch3 {
            background-color: #58ff00;
            top: -60px;
            left: 20px;
            transition: 0.2s;
            transition-delay: 0.1s;
            opacity: 1;
        }

        #colrow:hover .colch4 {
            background-color: #00ffac;
            top: -40px;
            left: 80px;
            transition: 0.2s;
            transition-delay: 0.15s;
            opacity: 1;
        }

        #colrow:hover .colch5 {
            background-color: #00a0ff;
            top: 20px;
            left: 100px;
            transition: 0.2s;
            transition-delay: 0.2s;
            opacity: 1;
        }

        .mid_body{
            /*padding: 20px;*/
            background-image: url('img/bodybackground.png');
            width: 100%;

        }

        .main_body{
            position: relative;
            top:20px;
            width: 70%;
            height: 1000px;
            background-color: rgba(0, 0, 0, 0.71);
            border-radius: 30px;
        }

        #background_color{
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 13, 255, 0.52);
        }
    </style>
</head>

<body style="margin:0;padding:0;">
<div id="body" style="position: absolute"></div>
<div id="main" align="center" style="left:20px;margin:0;padding:0;height:200px;background-color: #0a2b1d">
    <div
        style="background: url('img/footerbackground.png');background-size:cover;position: absolute;z-index: 1;width: 100%;height: 200px;opacity: 0.5"></div>
    <div id="spread" style="background-color: greenyellow;height:200px;width:0;position: absolute;padding: 0;margin: 0;"
         align="left"></div>
    <div id="colorchose" align="left">
        <ul style="position: relative;padding: 0;margin: 0;">
            <li class="col" style="background-color: black"></li>
            <li class="col" style="background-color: #0a2b1d"></li>
            <li class="col" style="background-color: purple"></li>
            <li class="col" style="background-color: blueviolet"></li>
            <li class="col" style="background-color: blue"></li>
            <li class="col" style="background-color: #04569A"></li>
            <li class="col" style="background-color: green"></li>
            <li class="col" style="background-color: #798400"></li>
            <li class="col" style="background-color: #ff4800"></li>
            <li class="col" style="background-color: red"></li>
        </ul>
    </div>
    <div style="display: inline-block;position: relative;z-index: 1"><h1 style="color: white">Reader</h1></div>
    <div align="center" style="top:100px;padding: 10px;margin: 0;position: relative;display: inline-block">
        <div class="bgm"></div>
        <ul class="ki">
            <li class="ji" id="0">data</li>
            <li class="ji" id="1">blog</li>
            <li class="ji" id="2">oj</li>
            <li class="ji" id="3">index</li>
            <li class="ji" id="4">war</li>
        </ul>
    </div>
</div>
<div align="center">
<!--    <img src="img/01.jpg">-->
</div>

<div class="mid_body" align="center">
    <div id="background_color"></div>
    <div class="main_body">

    </div>
</div>
<div id="colrow">
    <img src="img/yuan.png" style="width: 80px;height: 80px;">
    <div class="colch1"></div>
    <div class="colch2"></div>
    <div class="colch3"></div>
    <div class="colch4"></div>
    <div class="colch5"></div>
</div>
</body>
</html>
