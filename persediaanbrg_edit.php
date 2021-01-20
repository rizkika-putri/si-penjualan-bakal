<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_persediaanbarang WHERE id_barang ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Persediaan Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_barang" class="col-sm-3 control-label"> No Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_barang" value="<?=$data['id_barang']?>"class="form-control" id="inputEmail3" placeholder="No Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_bakal" class="col-sm-3 control-label">Jenis Bakal</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_bakal" value="<?=$data['jenis_bakal']?>"class="form-control" id="inputEmail3" placeholder="Jenis Bakal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok Bakal</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" value="<?=$data['stok']?>"class="form-control" id="inputEmail3" placeholder="Stok Bakal">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="warna" class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                                <input type="text" name="warna" value="<?=$data['warna']?>"class="form-control" id="inputEmail3" placeholder="Warna" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Persediaan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=persediaanbrg&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Persediaan Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    $id_barang=$_POST['id_barang'];
    $jenis_bakal=$_POST['jenis_bakal'];
    $stok_bakal=$_POST['stok'];
    $warna=$_POST['warna'];
    //buat sql
    $sql="UPDATE tb_persediaanbarang SET id_barang='$id_barang',jenis_bakal='$jenis_bakal',stok='$stok_bakal',warna='$warna' WHERE id_barang ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=persediaanbrg&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



