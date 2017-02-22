<?php

// echo $_SERVER['REQUEST_URI'];

if ( strpos($_SERVER['REQUEST_URI'], 'guestbook') !==false) { 
include "GuestBook.php";
}
else {
include "indexView.php";
}
?> 