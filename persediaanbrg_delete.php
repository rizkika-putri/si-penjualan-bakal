<?php
//membuat query untuk hapus data
$sql="DELETE FROM tb_persediaanbarang WHERE id_barang ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=persediaanbrg&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=persediaanbrg&actions=tampil');</scripr>";
}

