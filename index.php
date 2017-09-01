<?php
	include_once('config/connection.php');
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Phrasal Verb Find</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section class="container">
		<div class="row top">
			<div class="col-md-6 col-md-push-3">
				<h1 class="section-title">Phrasal Verb Find</h1>
				<!--<img src="img/icon.png">-->
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-push-3">
				<form class="form-search" method="POST">
					<!--<div class="form-inline">-->		
						<div class="form-group">
							<!-- onkeyup para os valores serem automaticamentes enviados a função -->
							<input type="text" name="search" onkeyup="Search(this.value);" id="search" class="search form-control" placeholder="search"/>
						</div>				
					<!--</div>-->
				</form>
			</div>
		</div>
		<div class="row box-content">
			<div class="col-md-6 col-md-push-3">
				 <div class="result"></div>
			</div>
		</div>
	</section>

	<script src="js/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function Search(e) {
			
				$.get('search.php?f=search&s=' + e, { // Método GET, direcionando a url
					
				}, function (data) {
					if(data.status == 200) {
						$('.result').html(data.html); // Div resulta apresentá os resultados
					} else {
						$('.result').html('<h4>No result!</h4>'); // Div resulta apresentá os resultados
					}
				});
			
		}
	</script>
</body>
</html>

<?php
	mysqli_close($connect);
?>