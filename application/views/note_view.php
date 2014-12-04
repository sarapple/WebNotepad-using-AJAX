<html>
<head>
	<meta charset="utf-8">
	<title>Post View</title>
	<link rel="stylesheet" href="/assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		$(document).on('click', '.postb', function(){
			$.post(
		        $('.createnote').attr('action'),
		        $('.createnote').serialize(),
				function(output){
					$('#notes').prepend('<div class="note"><h3 class="title">' + output.title + '</h3><h3 class="right">X</h3><textarea class="changes" action="noteit">' + output.content + '</textarea></div>');
				}, 'json'
			);
			return false;
		});
		//textarea note was updated
		$(document).on('keyup', '.changes', function(){
			$.post(
		        $(this).parent().attr('action'),
		        $(this).parent().serialize(),
				function(output){
				}, 'json'
			);
			return false;
		});
		//delete was clicked
		$(document).on('click', '.right', function(){
			var that = this;
			$.post(
		        $(that).parent().attr('action'),
		        $(that).parent().serialize(),
				function(output){
					$(that).parent().parent().fadeOut(300, function(){
					$(that).parent().parent().remove();
					});	
				}, 'json'
			);
			return false;
		});					
	</script>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div id='notes'>
<?php
		foreach ($notes as $note) {														?>																																											
				<div class='note'>
					<form class='deletenote' action='/notes/deletenote' method='post'>
						<input type='hidden' name='id' value='<?=$note['id']?>'>
						<h3 class='title'><?=$note['title']?></h3>
						<h3 class='right'>X</h3>
					</form>
					<form class='updatenote' action='/notes/updatenote' method='post'>
						<input type='hidden' name='id' value='<?=$note['id']?>'>
						<textarea class='changes' name='notecontent'><?=$note['content']?></textarea>
					</form>
				</div>
<?php  	}																				?>
			</div>
		</div>
		<div id='addstuff'>
			<h3>Add a Note:</h3>
			<form class='createnote' method='post' action='notes/createnote'>
				<input type='text' name='title' placeholder='Insert note title here...'>
				<input type='submit' class='postb' value='Add Note'>
			</form>
		</div>
	</div>
</body>
</html>