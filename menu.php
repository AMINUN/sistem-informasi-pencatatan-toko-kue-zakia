<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">PENCATATAN DATA PESANAN KUE DITOKO ROTI ZAKIA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=roti&actions=tampil">Jenis Roti</a></li>
                        <li><a href="?page=pesan&actions=tampil">Pesanana Kue Ambil Di Tempat </a></li>
                        <li><a href="?page=hantar&actions=tampil">Pesanan Kue Hantar Di Kerumah</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan Kue <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=laporan&actions=roti">Laporan pesan Jenis Roti</a></li>
                        <li><a href="?page=laporan&actions=pesan">Laporan pesan di tempat</a></li>
						<li><a href="?page=laporan&actions=hantar">Laporan ku Hantar Di Tempat</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>

                <?php
               }elseif(isset($_SESSION['level']) && $_SESSION['level'] ==0) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=laporan&actions=roti">Laporan pesan Jenis Roti</a></li>
                        <li><a href="?page=laporan&actions=pesan">Laporan pesan di tempat</a></li>
                        <li><a href="?page=laporan&actions=hantar">Laporan ku Hantar Di Tempat</a></li>
                    </ul>
                </li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
