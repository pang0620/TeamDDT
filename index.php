<?php
require_once("select.php");
?>

<!DOCTYPE html>
<html lang="ko">
	<head>
		<title>TEAM DDT</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<section>
			<h1 style="font-size: 200%;">TEAM DDT</h1>
			<div id="all">
				<div id="title">
				</div>

				<div id="up">
					<a>
						<div id="up1" class="in">
							<div id="up1sub" class="sub">😷</div>
							미세먼지 <?php if((double)$dust>17) {echo "<strong style='color:red;'>$dust</strong>"; } else { echo "<br><br>$dust"; }?>
						</div>
					</a>
					<a>
						<div id="up2" class="in">
							<div id="up2sub" class="sub">🌡️</div>
							온도 <?php echo "<br><br>$temp" ?>
						</div>
					</a>
				</div>

				<div id="down">
					<a>
						<div id="down1" class="in">
							<div id="down1sub" class="sub">🌧️</div>
							1시간 강수량 <?php echo "<br><br>$prec" ?>
						</div>
					</a>
				<a>

						<div id="down2" class="in">
							<div id="down1sub" class="sub">☂️</div>
							강수 확률 <?php echo "<br><br>$prob" ?>
						</div>
					</a>
					<a>
						<div id="down3" class="in">
							<div id="down1sub" class="sub">🌫️</div>
							습도 <?php echo "<br><br>$humid" ?>
						</div>
					</a>
				</div>
			</div>
		</section>
	</body>
</html>
