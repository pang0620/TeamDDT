	<?php
	require_once("select.php");
	?>

	<!DOCTYPE html>
	<html lang="ko">
	    <head>
		<title>TEAM DDT</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
	    </head>
	    <body>
		<section>
		    <div id="all">
			<div id="title">
				TEAM DDT
			</div>
			<div id="up">
			    <a href="미세먼지.html">
				<div id="up1" class="in">
				미세먼지 <?php if((double)$dust>17) {echo "<strong style='color:red;'>$dust</strong>"; } else { echo "<br><br>$dust"; }?>
				</div>
			    </a>
			    <a href="온도.html">
				<div id="up2" class="in">
					온도 <?php echo "<br><br>$temp" ?>
				</div>
			    </a>
			</div>
			<div id="down">
                    <a href="1시간강수량.html">
                        <div id="down1" class="in">
                            1시간 강수량 <?php echo "<br><br>$prec" ?>
                        </div>
                    </a>
                    <a href="강수확률.html">
                        <div id="down2" class="in">
                            강수 확률 <?php echo "<br><br>$prob" ?>
                        </div>
                    </a>
                    <a href="습도.html">
                        <div id="down3" class="in">
                            습도 <?php echo "<br><br>$humid" ?>
                        </div>
                    </a>
                    
                </div>
            </div>
        </section>
    </body>
</html>
