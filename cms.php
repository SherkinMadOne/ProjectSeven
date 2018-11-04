<!doctype html>

<html lang="en-UK">
    <head>
        <link rel="stylesheet" href="cmsstyle.css" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> CMS </title>
        <style>
        
        </style>
    </head>
    <body>
        <header>

        </header>
        
		<nav>
			<img src="uccLogo.png" />
			<a href="cms.php"> Home </a>
			<a href="cms.php?page=1"> Studies </a>
			<a href="cms.php?page=2""> About Me </a>
			<a href="cms.php?page=3"> Links </a>
		</nav>
		<section>
			<?php

				function checkFile($fileName){
					if (is_readable($fileName)) {
    					include $fileName;
					} else {
    					echo "Error. Content file cannot be retrieved.";
					}

				}

				if (isset($_GET['page'])){
				$inputValue=$_GET['page'];
				switch ($inputValue) {
					case "1" :
						checkFile("text1.txt");
						break;
					case "2" : 
						checkFile("text2.txt");
						break;		
					case "3":
						checkFile("text13.txt");
						break;
					
					default :
					echo "Error. Content file not accessible.";	
				}
			}
			else {
			include "home.txt";
			}
			?>
		</section>
		<footer>

		</footer>
    </body>
</html>

