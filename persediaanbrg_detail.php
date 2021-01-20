<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Persediaan Barang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_persediaanbarang WHERE id_barang ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>No Barang</td> <td><?= $data['id_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Bakal</td> <td><?= $data['jenis_bakal'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok Barang</td> <td><?= $data['stok'] ?></td>
                        </tr>
                        <tr>
                            <td>Warna</td> <td><?= $data['warna'] ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=persediaanbrg&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Persediaan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

