<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pesanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                                <label for="nama_kue" class="col-sm-3 control-label">Nama Kue</label>
                                <div class="col-sm-9">
                                     <select name="nama_kue" class="form-control" >
                                    <?php
                                          $Ambil = mysqli_query($koneksi, "SELECT * FROM tbl_roti");
                                          while ($data = mysqli_fetch_array($Ambil)) { ?>
                                            <option value="<?= $data['idroti'] ?>">
                                                           <?= $data['nama_kue'] ?>
                                             
                                            </option> 
                                         <?php
                                             }
                                         ?>

                                      </select>
                                      
                                </div>
                            </div>
                         <div class="form-group">
                            <label for="tgl_pesanan" class="col-sm-3 control-label">Tanggal Pesanan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pesanan" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputEmail3" placeholder="Inputkan Para Pihak yang Terlibat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Surat Masuk</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pesan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pesanan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama_kue=$_POST['nama_kue'];
  $tgl_pesanan=$_POST['tgl_pesanan'];
  $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO tbl_ditempat VALUES ('','$nama_kue','$tgl_pesanan','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pesan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
