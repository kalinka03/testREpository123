<?php
$newmessage = $_POST;
if (!empty($_FILES)) {
	if($_FILES['file']['size']!=0){
		$fileExtension = pathinfo(
			$_FILES['file']['name'],
			PATHINFO_EXTENSION
			);
		$filename = uniqid().'.'.$fileExtension;
		$filePath = 'files/'.$filename;
		move_uploaded_file( $_FILES['file']['tmp_name'], $filePath );
		$newmessage['files']=$filename;
	};
};
$messages = json_decode( file_get_contents( 'db.txt' ), true );
$allmessages=($messages =='') ? [] : $messages;

if(!empty($newmessage)){
	if ( strpos($newmessage['email'], '@') !==false) {
		setcookie('name', $newmessage['name'], time()+(3600*24*7)); 
		setcookie('email', $newmessage['email'], time()+(3600*24*7));
		date_default_timezone_get("Europe/Kiev");
		$newmessage['time']=date("d-m-Y H:i:s");
		array_unshift( $allmessages, $newmessage );
		$res= file_put_contents('db.txt', json_encode( $allmessages));
		$_SESSION['notice'] = "Message has been saved successfuly";
	};
	if (  strpos($newmessage['email'], '@') ==false) {
		$_SESSION['notice'] = "Неправильно введён email";
	};
	if( $newmessage['name'] != '' && $newmessage['email'] != '' && $newmessage['message'] != '' ) {
		$name_message = $newmessage['name'];
		$email_message = $newmessage['email'];
		$mes_message = $newmessage['message'];
		include "config.php";
		mail($config['adminEmail'], 'mail',"Имя пользователя-$name_message
			,email пользователя-$email_message
			,cообщение пользователя-$mes_message");
	};
};
if(
	isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
	&& !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
	&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
	) {
	echo json_encode( [ 'result' => (int)$res ] );
exit;
}

include "GuestBookView.php";














