<?php
require_once("select.php");
?>

<html lang="ko">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DDT</title>
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

            #all{
                background-color: rgb(221, 239, 255);
                padding: 20px 50px 50px 50px;
            }

            .in{
                width: 150px;
                margin: 8px 4px;
                padding: 30px 0px 0px 0px;
            }

            #left{
                float: left;
            }

            #left1{
                width: 150px;
                height: 170px;
                margin: 8px 4px;
                background-color: rgb(129, 255, 127);
            }

            #left2{
                height: 110px;               
                background-color: rgb(116, 226, 190);
            }

            #center{
                float: left;
            }

            #center1{               
                height: 70px;
                background-color: rgb(137, 212, 136);
            }

            #center2{                
                height: 210px;
                background-color: rgb(212, 252, 212);
            }

            #right{
                float: left;
            }

            #right1{
                height: 120px;
                background-color: rgb(44, 150, 114);
            }
            #right2{
                height: 160px;
                background-color: rgb(110, 188, 162);
            }

            #window{
                margin: 0px 0px 0px 0px ;
            }

            button{
                width: 150px;
                height: 50px;
                border-radius: 30px;
                border: 3px solid white;
                background-color: aqua;
                color: white;
                font: 30px Arial;
            }
        </style>
    </head>
    <body>
        <section>
            <div id="all">
                <div>
                    <h3>야외 기상 상황</h3>
                </div>
                <div id='left'>
                    <div id="left1" class="in">
		        온도 <?php echo $temp ?>
                    </div>
                    <div id="left2" class="in">
                        습도 <?php echo $humid ?>
                    </div>
                </div>
                <div id="center">
                    <div id="center1" class="in">
		    미세먼지
<?php 
	if((double)$dust>17) { 
		echo "<strong style='color: red;'>$dust</strong>"; 
	} else {
		echo $dust;
}?>
                    </div>
                    <div id="center2" class="in">
                        기상청
                    </div>
                </div>
                <div id="right">
                    <div id="right1" class="in">
                        1시간 강수량 <?php echo $prec ?>
                    </div>
                    <div id="right2" class="in">
                        강수확률 <?php echo $prob ?>
                    </div>
                </div>
                <div id="window">
                    창문 개폐 상태<br><br>
                    <button>
                        OPEN
                    </button>
                </div>
            </div>
        </section>
    </body>
</html>
