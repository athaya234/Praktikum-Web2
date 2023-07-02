<?php
// IMPORT
require_once 'dbkoneksi.php';
// TANGKAP DATA ID DELETE
$delete = $_GET['iddel'];
// BIKIN QUERY
$sql = "DELETE FROM pelanggan WHERE id=?";
// SIAPIN QUERY
$st = $dbh->prepare($sql);
// EKSEKUSI QUERY
$st->execute([$delete]);

header('location:list_pelanggan.php');
?>