<?php
/*
File: config.php
Fungsi: Koneksi ke Database
Auth: ShowCheap
*/
require 'fungsi.php';
function sambung($db='libsca_copy', $host='localhost', $user='root', $pass='root'){
    @mysql_connect($host,$user,$pass) or die('<strong style="color: red;">Gagal Terhubung ke database</strong>');
    @mysql_select_db($db) or die('<strong style="color: red;">Gagal Memilih database</strong>');;
};

function putus(){
    mysql_close;
}
?>