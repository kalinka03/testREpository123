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


<!-- <script type="text/javascript">
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
 
    var res = JSON.parse(data);
      if( res.result > 0 ) {
            el = document.createElement('tr');
     td3=document.createElement('td');
       $(td3).html($('#message').val());
         $(el).prepend(td3); 
         td2=document.createElement('td');
      $(td2).html($('#email').val()); 
       $(el).prepend(td2);
       td1=document.createElement('td');
      $(td1).html($('#name').val()); 
      $(el).prepend(td1);
      var date = new Date();
      td=document.createElement('td');
      $(td).html(date.getDate()+'.'+date.getMonth()+'.'+date.getFullYear()+' '+date.getHours()+'-'+date.getMinutes()); 
      $(el).prepend(td);
      $('#table').prepend(el);
    }    
   });
  });
 });
 </script> -->



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
      if( res.result > 0 ) {
     el = document.createElement('div');

     $(el).html( $('#name').val() + '<br/>' + 
        $('#email').val() + '<br/>' + 
        $('#message').val() +  $('#email').val() + '<br/><br/><hr/>' );
     console.log(el);
     $('#messages').prepend(el);
    }    
   });
  });
 });
</script>

<table  id='table' border='1' cellspacing="0" cellpadding="10">

<!-- 	<tr class="center1">
		<td class="center1">Дата</td>
		<td class="center1">Имя</td>
		<td class="center1">Email</td>
		<td class="center1">Сообщение</td>
	</tr> -->

	<?php 
	foreach ($allmessages as  $message) {  
	?> 
	<tr class="center1">
		<td class="center1" ><?=$message['time']?></td>
		<td class="center1" ><?=$message['name']?></td>
		<td class="center1" ><?=$message['email']?></td>
		<td class="center1" ><?=$message['message']?></td>

	</tr>

	<?php } ?>

</table>

<div id='messages'> 
	
</div>

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