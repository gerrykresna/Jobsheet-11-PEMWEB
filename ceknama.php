<?php
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("lat11");

$nama = $_GET['a'];

$query = mysql_query("select nama_lengkap from tabeluser where nama_lengkap='$nama'");

if(mysql_num_rows($query)==0){
    echo "$nama belum ada yang pakai";
}else{
    echo "$nama sudah ada yang pakai";
}
?> 