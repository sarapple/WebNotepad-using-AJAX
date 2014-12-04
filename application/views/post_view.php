<html>
<head>
	<meta charset="utf-8">
	<title>Post View</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.postb').click(function(){
				$.post(
			        $('.postit').attr('action'),
			        $('.postit').serialize(),
					function(output){
						$('#results').append('<div class="result"><h3 class="note">' + output.description + '</h3></div>');
					}, 'json'
				);
				return false;
			});
		});
	</script>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-md-11 col-md-offset-1' id='results'>
<?php
		foreach ($posts as $post) {														?>																																											
				<div class='result'>
					<h3 class="note"><?=$post['description']?></h3>
				</div>
<?php  	}																				?>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-5 col-md-offset-1'>
				<h3>Add a Note:</h3>
				<form class='postit' method='post' action='posts/addpost'>
					<input type='textarea' name='content'>
					<input class='postb btn btn-success' type='submit' value='Post It!'>
				</form>
			</div>
		</div>
	</div>
</body>
</html>