<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>startit-php</title>
</head>
<style>
    body {
        margin-top: 6em;
        font-weight: 700;
        background-color: #212529;
        font-family: 'Roboto', sans-serif !important;
    }
	
	.resenje{background-color: yellow;}
</style>

<body>
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Cenzurisanje bezobraznih reči</h1>
            <p>Lorem ipsum bomb sit amet, kill adipiscing elit explode.</p>
            <p>
				<div class="resenje">
					<?php
						$komentar = "Lorem ipsum bomb sit amet, kill adipiscing elit explode.";
						$bezobrazneReci = ["bomb", "kill", "explode"];
						function a($v){return $v;}

						$bezobrazneReci = array_filter($bezobrazneReci, "a");
						foreach($bezobrazneReci as $bezobraznaRec) {
							$pattern = str_repeat("*", strlen($bezobraznaRec)-2);
							$replacement = $bezobraznaRec[0].$pattern.$bezobraznaRec[strlen($bezobraznaRec)-1];
							$komentar = preg_replace("/".$bezobraznaRec."/", $replacement, $komentar);
						}

						echo $komentar;
					?>
				</div>
			</p>
            <br><hr><br>
			
            <h1>Brojanje reci u tekstu</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
				<div class="resenje">
					<?php 
						$count_array = array("lorem", "of");
						$string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
						
						foreach($count_array as $word)
						{
							echo "Reč ". $word ." se ponavlja " . substr_count(strtolower($string), $word) . " puta.<br>";
						}
						?>
				</div>
            </p>
        </div>
    </main>
</body>

</html>