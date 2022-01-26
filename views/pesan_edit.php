<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_ditempat WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data </h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">                       
					    
                        <div class="form-group">
                            <label for="tgl_pesanan" class="col-sm-3 control-label">Tanggal Pesanan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pesanan" value="<?=$data['tgl_pesanan']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Pesanan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>"class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>
                        <!--Akhir Status-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pesanan Kue</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pesan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pesanan Kue
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $tgl_pesanan=$_POST['tgl_pesanan'];
	$keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE tbl_ditempat SET tgl_pesanan='$tgl_pesanan',keterangan='$keterangan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pesan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



