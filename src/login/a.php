<?php
//echo "Login.php page reached";
/*
ob_start ();
session_start ();
if (isset ( $_SESSION ['user'] )) {
    header ( 'Location: ../../web/index.html' );
    exit ( 0 );
}

include_once '../postgres/connection.php';
include_once '../postgres/credentials.php';
$o = new query ();

$row = $o->getAllForEmailFromUser ( $_POST ['Email'] );
if ($row [0] == md5 ( $_POST ['Password'] . $salt )) {
    // IF LOGIN IS CORRECT THEN SESSION IS STARTED HERE
    $_SESSION ['user'] = array (
        'name' => $row [2],
        'id' => $row [1]
    );
    header ( 'Location: ../../web/index.html' );
    exit ( 0 );
} else {
    echo "<script>alert('username or password is wrong');window.location='../../web/login.html';</script>";
}

*/

print_r("jlkjlkjkljlkjlk");
