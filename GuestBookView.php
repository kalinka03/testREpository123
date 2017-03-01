<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Привет мир!</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery-2.1.3.js">
	</script>
</head>
<body>
	<?php 
	if (!empty($_SESSION['notice'] ) ){
	echo $_SESSION['notice'];
}
?>
<script type="text/javascript">
$(document).ready( function(e) { // Загрузка документа

	$('#guestForm').submit( function(e) {
		e.preventDefault();
		$.ajax({
			method: "POST",
			url: "/guestbook",
			data: { 
				name: $('#name').val(), 
				email: $('#email').val(),
				message:  $('#message').val()
			}
		}).done( function( data ) {

			var res = JSON.parse( data );
			console.dir(res);
			
			if( res.message.result > 0 ) {
				console.warn(res.message.result);
				var el = document.createElement('tr');
			
				el.class = 'center1';
				$(el).html(
					'<td class="center1">' + res.message['time'] + '</td> ' +
					'<td class="center1">' + res.message['name'] + '</td> ' +
					'<td class="center1">' + res.message['email'] + '</td> ' +
					'<td class="center1"> ' + res.message['message'] + '</td> ');
				$('.messages').prepend(el);
			}    
		});
	});
});
</script>

<table  id='table'  class="messages" border='1' cellspacing="0" cellpadding="10">

	<?php 
	foreach ($allmessages as  $message) {  
	?> 
	<tr class="center1">
		<td class="center1" ><?=$message['time']?></td>
		<td class="center1" ><?=$message['name']?></td>
		<td class="center1" ><?=$message['email']?></td>
		<td class="center1" ><?=$message['message']?> 
			<br>
			<?php
			if(isset($message['files'])){?>
			<a href="/files/<?=$message['files']?>">ссылка
			</a>
			<?php } ?> 
		</td>  

	</tr>

	<?php } ?>

</table>

<table id='messages'> 
	
</table>

<form  id="guestForm" action="" method="post"  class="form-horizontal">
	<div class="form-group">
		<div class="col-xs-9 col-xs-12 weigth-tab">
			<input  id="name" name="name" type="text" class="form-control" id="lastName" placeholder="Ваше имя">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-9 col-xs-12 weigth-tab">
			<input id="email" name="email" type="email" class="form-control" id="inputEmail" placeholder=" Ваш Email">
		</div>
	</div>

	<div class="form-group">
		<div class="col-xs-9 col-xs-12 weigth-tab">
			<textarea  id="message" rows="3" name="message" class="form-control" id="postalAddress" placeholder="Текс сообщения"></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-xs-offset-8 col-xs-4">
			<input name="Send" type="submit" class="btn btn-primary" value="Отправить">
		</div>
	</div>
</form>
</body>
</html>