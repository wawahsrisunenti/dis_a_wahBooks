<?php
include('koneksi.php');
$koneksi = new database();


$action = $_GET['action'];
if($action == "add")
{
    $koneksi->tambah_data($_POST['idBuku'],$_POST['kategori'],$_POST['namaBuku'],$_POST['harga'],
    $_POST['stok'],$_POST['penerbit']);
    header('location:admin/v_buku.php');
}
elseif($action=="edit")
{
    $koneksi->update_data($_POST['idBuku'],$_POST['kategori'],$_POST['namaBuku'],$_POST['harga'],
    $_POST['stok'],$_POST['penerbit']);
    header('location:admin/v_buku.php');
}


elseif($action=="delete")
{
    $id_buku = $_GET['id_buku'];
    $koneksi->delete_data($id_buku);
    header('location:admin/v_buku.php');
}
elseif ($action=="login")
{
    $koneksi->cek_data($_POST['username'],$_POST['password']);
   
}


?>
