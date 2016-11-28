<?php
mysql_connect("localhost","root","");
mysql_select_db("username");

$id = $_GET['q'];

$query = mysql_query("select Nama_User from user where Nama_User='$id'");

if(mysql_num_rows($query)==0){
    echo "$id belum ada yang pakai";
}else{
    echo "$id sudah ada yang pakai";
}
?> 