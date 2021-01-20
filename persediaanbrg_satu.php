<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Persediaan Barang</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_persediaanbarang WHERE id_barang='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Penjualan Bakal Kisaran </h2>
                        <h4>Jl. DR. Sutomo No. 80, Kisaran <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PERSEDIAAN BARANG BAKAL</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nomor Barang</td> <td><?= $data['id_barang'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Bakal</td> <td><?= $data['jenis_bakal'] ?></td>
                                </tr>
                                <tr>
                                    <td>Stok Bakal</td> <td><?= $data['stok'] ?></td>
                                </tr>
                                <tr>
                                    <td>Warna</td> <td><?= $data['warna'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Toko Kain Sutomo<strong></u><br>
                                        No Hp.082388871234
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
