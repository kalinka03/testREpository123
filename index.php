<?php

session_start();
 // повідомлення збережено

if ( strpos($_SERVER['REQUEST_URI'], 'guestbook') !==false) { 
include "GuestBook.php";
}
else {
include "indexView.php";
}
unset( $_SESSION['notice'] );

?> 