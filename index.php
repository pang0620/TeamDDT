<!DOCTYPE html>
<html>
    <head>
        <title>2조의 캡스톤</title>
        <style>
            @import "font_ROCAF.css";
            *{
                font-family: 'ROKAF', serif;
            }

            body{
                background-color: rgb(157, 204, 244);
                color: white;
            }

            section{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            div {
                text-align: center;
            }

            a{
                text-decoration-line: none;
                color: white;
            }

            a:hover{
                color: rgb(255, 255, 125);
            }

            #title{
                padding: 40px 0px 20px 0px;
            }

            #all{
                width:1500px;
                height: 1100px;
                background-color: rgb(221, 239, 255);
                font-size: 50px;
            }

            .in{
                padding: 50px 0px 0px 0px;
            }

            #up{
                margin: 0px 0px 10px 0px;
            }

            #up1{
                display: inline-block;
                width: 700px;
                height: 350px;
                background-color: rgb(137, 212, 136);
            }

            #up2{
                display: inline-block;
                width: 700px;
                height: 350px;               
                background-color: rgb(116, 226, 190);
            }

            #down1{
                display: inline-block;
                width: 450px;
                height: 450px;
                background-color: rgb(44, 150, 114);
            }

            #down2{
                display: inline-block;
                width: 400px;
                height: 450px;
                background-color: rgb(110, 188, 162);
            }

            #down3{
                display: inline-block;
                width: 535px;
                height: 450px;
                background-color: rgb(167, 255, 167);
            }
        </style>
    </head>
    <body>
        <section>
            <div id="all">
                <div id="title">
                    야외 기상 상황
                </div>
                <div id="up">
                    <a href="미세먼지.html">
                        <div id="up1" class="in">
			미세먼지 <?php if((double)$dust>17) {echo "<strong style='color:red;'>$dust</strong>"; } else { echo $dust; }?>
                        </div>
                    </a>
                    <a href="온도.html">
                        <div id="up2" class="in">
				온도 <?php echo $temp ?>
                        </div>
                    </a>
                </div>
                <div id="down">
                    <a href="1시간강수량.html">
                        <div id="down1" class="in">
                            1시간 강수량 <?php echo $prec ?>
                        </div>
                    </a>
                    <a href="강수확률.html">
                        <div id="down2" class="in">
                            강수 확률 <?php echo $prob ?>
                        </div>
                    </a>
                    <a href="습도.html">
                        <div id="down3" class="in">
                            습도 <?php echo $hum ?>
                        </div>
                    </a>
                    
                </div>
            </div>
        </section>
    </body>
</html>
