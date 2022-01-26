<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Roti Legalisir</h3>
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
                            <label for="nohp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor HP" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pembeli" class="col-sm-3 control-label">Nama Pembeli</label>
                            <div class="col-sm-9">
                                <input type="text" name="pembeli" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pembeli" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pesanan" class="col-sm-3 control-label">Tanggal Pesanan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pesanan" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pesanan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Nama Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Penerima" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kurir" class="col-sm-3 control-label">Nama Kurir</label>
                            <div class="col-sm-9">
                                <input type="text" name="kurir" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Kurir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat Pemesan</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan alamat Pesanan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=hantar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data 
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form

    $nama=$_POST['nama_kue'];
    $nohp=$_POST['no_hp'];
    $pembeli=$_POST['pembeli'];
    $pesanan=$_POST['tgl_pesanan'];
    $penerima=$_POST['penerima'];    
    $kurir=$_POST['kurir'];
    $alamat=$_POST['alamat'];
    
	
    //buat sql
    $sql="INSERT INTO tbl_hantar VALUES ('','$nama','$nohp','$pembeli','$pesanan','$penerima','$kurir','$alamat')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=hantar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
