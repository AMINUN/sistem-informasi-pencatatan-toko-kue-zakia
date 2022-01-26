<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data </title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                       <h2>Sistem Informasi Pencatatan Toko Roti Kab.Batubara </h2>
                        <h4> Kec Nibung Hangus Desa Ujung Kubu, West Batu Bara Regeney, North Sumatra 21216</h4>
                        <hr>
                        <h3>DATA SELURUH </h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
                                    <th width="18%">Nama Kue</th>
                                    <th>No Hp</th>
                                    <th width="15%"><center>Nama Pemesan</center></th>
                                    <th width="10%">Tgl. Pesanan</th>
                                    <th><center>Nama Penerima</center></th>
                                    <th><center>Nama Kurir</center></th>
                                    <th><center>Alamat Pemesan</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_hantar left join tbl_roti on tbl_roti.idroti=tbl_hantar.idroti";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama_kue'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['pembeli'] ?></td>
                                    <td><?= $data['tgl_pesanan'] ?></td>
                                    <td><?= $data['penerima'] ?></td>
                                    <td><?= $data['kurir'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
									
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kab.Batubara  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                      <u> Yuni SE<strong></u><br>
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