<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Persediaan Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label for="id_barang" class="col-sm-3 control-label">No Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_barang" class="form-control" id="inputEmail3" placeholder="Inputkan No Barang" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jenis_bakal" class="col-sm-3 control-label">Jenis Bakal</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_bakal" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Bakal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok Bakal</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" class="form-control" id="inputEmail3" placeholder="Inputkan Stok Bakal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="warna" class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                                <input type="text" name="warna" class="form-control" id="inputEmail3" placeholder="Inputkan Warna" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                <div class="panel-footer">
                    <a href="?page=pesediaanbrg&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Persediaan Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $id=$_POST['id_barang'];
    $jenis=$_POST['jenis_bakal'];
    $stok=$_POST['stok'];
    $warna=$_POST['warna'];
    //buat sql
    $sql="INSERT INTO tb_persediaanbarang VALUES ('$id','$jenis','$stok','$warna')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Persediaan Error");
    if ($query){
        echo "<script>window.location.assign('?page=persediaanbrg&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
