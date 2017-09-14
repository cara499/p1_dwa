<?php
$quotes = 
[
	'Every strike brings me closer to the next home run. – Babe Ruth', 
	'To live is the rarest thing in the world. Most people exist, that is all. – Oscar Wilde', 
	'The journey of a thousand miles begins with one step. - Lao Tzu'
];
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="p1.css">
  	<title>Cara Smith</title>
	</head>

	<body>
		<h1>Cara Smith</h1>

		<img src="lg.jpg" class="centerImage" alt="Me" width="228" height="228"> 
    
    <h2>About Me</h2>
  		<p class="main">
  			Hi, I'm Cara.
  			By day I'm a SAS Programmer at Harvard School of Public Health.
    		I enjoy learning new things, especially when it comes to programming which is 
    		why I'm taking this course. Clearly I'm not great with HTML/CSS, but I think I'll get by.
    	</p>

		<h2>Random Quote</h2>
		<p>
			<?php echo $quotes[array_rand($quotes)]; ?>
		</p>

	</body>
</html>