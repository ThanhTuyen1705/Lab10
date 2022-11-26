<?php
require "../vendor/autoload.php";
$dbname = 'dct';
try {
 $m = new
MongoDB\Client("mongodb+srv://thanhtuyen1705:thanhtuyen1705@cluster0.g3gvw.mongodb.net/myFirstDatabas
e?retryWrites=true&w=majority");
 $db = $m->$dbname;
}
catch(Exception $ex) {
 print $ex;
 header("location:../error.html");
}
?>