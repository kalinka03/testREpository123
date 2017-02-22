<?php
$newmessage = $_POST;
$messages = json_decode( file_get_contents( 'db.txt' ), true );
$allmessages=($messages =='') ? [] : $messages;
if(!empty($newmessage)){
 date_default_timezone_get("Europe/Kiev");
 $newmessage['time']=date("d-m-Y H:i:s");
 array_unshift( $allmessages, $newmessage );
 $res= file_put_contents('db.txt', json_encode( $allmessages));
}
if(
 isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
 && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
 && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
) {
 echo json_encode( [ 'result' => (int)$res ] );
 exit;
}
include "GuestBookView.php";












 // $Newmessage= $_POST;

// $today = date("d-m-Y H:i:s", time()); 
// $Newmessage['time']=$today;
// // array_unshift ($Newmessage, $today);
// var_dump ($Newmessage);

// /*file_put_contents( 'db.txt', json_encode( $params) );*/

// $messages = json_decode( file_get_contents( 'db.txt'), true );//  считуємо з файлу і потім переводимо в масив переводимм в строку
// $allmessages=($messages =='') ? [] : $messages;
// if(!empty($Newmessage)){

// array_unshift( $allmessages, $Newmessage );//  до початку масиву парамс додаємо масив меседж Добавляет один или несколько элементов в начало массива $allmessages


// file_put_contents( 'db.txt', json_encode( $allmessages) );// отримуємо повідомлення у вигляді масиву, переводимо в json і записуємо в файл  Пишет строку в файл
// }
// include "GuestBookView.php"; -->






 // define( 'DB_PATH', 'db.txt' );

// $newMessage = $_POST;
 
// if( $newMessage['name'] != '' && $newMessage['email'] != '' && $newMessage['message'] != '' ) {
 
//  if( file_exists( DB_PATH ) ) { 
//   $allMessages = json_decode ( file_get_contents( DB_PATH ), true );
//   array_unshift( $allMessages, $newMessage );
//  }
//  else {
//   $allMessages = [$newMessage];
//  }
 
//  var_dump( $newMessage, $allMessages );
 
//  file_put_contents( DB_PATH, json_encode( $allMessages ) );
 
 
 

// }

//  include "GuestBookView.php"; -->















