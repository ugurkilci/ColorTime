<?php require_once "colortime.php"; // ColorTime ?>
<html>
	<head>
		<title>ColorTime Examples</title>
		<style>
			body{
				background:<?php echo colortime("#dddddd", "#1E2188"); // Daytime, Night ?>;
			}
			h1{
				color:<?php echo colortime("gray", "black"); // Text Color ?>;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo colortime("colortime.png", "colortimeters.png"); ?>" /> <!-- Image -->
		<h1>ColorTime</h1> <!-- Text -->
		<?php
			// Different Examples
			echo colortime("1", "0")."<br />"; // 1, 0
			echo colortime("true", "false")."<br />"; // true, false
			echo colortime("on", "off")."<br />"; // on, off
			echo colortime("play", "stop")."<br />"; // play, stop
			echo colortime("cat", "dog")."<br />"; // cat, dog
		?>
	</body>
<html>