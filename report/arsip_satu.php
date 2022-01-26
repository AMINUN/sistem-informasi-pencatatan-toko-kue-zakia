<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Surat Masuk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM arsip WHERE id='" . $_GET ['id'] . "'";
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
                        <h2>Sistem Informasi Arsip Persuratan Kementerian Agama Kab.Asahan </h2>
                        <h4> Kec.Kota, Jl.Turi No 4 Mekar Baru, West Kisaran Asahan Regeney, North Sumatra 21216</h4>
                        <hr>
                        <h3>DATA SURAT</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nomor </td> <td><?= $data['no_perkara'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Pemesan</td> <td><?= $data['ruang_arsip'] ?></td>
                                </tr>
                               
                                <tr>
                                    <td>Nama Kue</td> <td><?= $data['para_pihak'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Pesanan</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
							
								<tr>
                                    <td>Keterangan</td> <td><?= $data['status'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kab.Asahan  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Dr .H. HAYATSYAH.M.pd<strong></u><br>
                                        NIP.9670610 1996031003
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>