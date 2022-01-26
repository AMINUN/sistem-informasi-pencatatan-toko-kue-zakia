<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_hantar WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Roti Pesanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="inputEmail3" placeholder="No Hp">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="pembeli" class="col-sm-3 control-label">Pembeli</label>
                            <div class="col-sm-9">
                                <input type="text" name="pembeli" value="<?=$data['pembeli']?>"class="form-control" id="inputEmail3" placeholder="Pembeli" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label for="tgl_pesanan" class="col-sm-3 control-label">Tanggal Pesanan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pesanan" value="<?=$data['tgl_pesanan']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Pesanan">
                            </div>
                        </div>
                        <!--end tanggal lahir-->           
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?=$data['penerima']?>"class="form-control" id="inputEmail3" placeholder="Penerima">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kurir" class="col-sm-3 control-label">kurir</label>
                            <div class="col-sm-9">
                                <input type="text" name="kurir" value="<?=$data['kurir']?>"class="form-control" id="inputEmail3" placeholder="Kurir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Roti</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=hantar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Roti
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
    $no_hp=$_POST['no_hp'];
    $pembeli=$_POST['pembeli'];
    $tgl_pesanan=$_POST['tgl_pesanan'];
    $penerima=$_POST['penerima'];    
    $kurir=$_POST['kurir'];
    $alamat=$_POST['alamat'];
    
    
    //buat sql
    $sql="UPDATE tbl_hantar SET nama_kue='$nama_kue',no_hp='$no_hp',pembeli='$pembeli',tgl_pesanan='$tgl_pesanan',penerima='$penerima',kurir='$kurir',alamat='$alamat' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=hantar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



