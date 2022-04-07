<?php
    include "headerAdmin.php";
    include "../model/classKonsul.php";
    $db = new konsul();
    $id = $_GET['id'];
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="source/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Konsultasi</h2>
                        <div class="breadcrumb__links">
                            <a href="indexAdmin.php">Beranda</a>
                            <span>Konsultasi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<body>

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="consultation__form">
                        <div class="section-title">
                          <h2>Edit Konsultasi</h2>
                        </div>
                        <div class="section-title">
                            <form action ="../controller/prosesKS.php?aksi=update" method="post" class="form-horizontal">
                            <?php
                            foreach($db->edit($id) as $m){
                            ?>
								<div class="card-body">
									<div class="col col-sm-8">
                                        <div class="form-group">
                                            <label>ID Pasien</label>
                                            <input name="ID_Konsul" type="text" class="form-control" readonly value="<?php echo $m['ID_Konsul']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pasien</label>
                                            <input name="namaPasien" type="text" class="form-control" id="namaPasien" value="<?php echo $m['namaPasien']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Usia Pasien</label>
                                            <input name="usia" type="number" class="form-control" id="usia" value="<?php echo $m['usia']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <input name="jenisKelamin" type="text" class="form-control" id="usia" value="<?php echo $m['jenisKelamin']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Handphone</label>
                                            <input name="noHP" type="number" class="form-control" id="noHP" value="<?php echo $m['noHP']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input name="alamat" type="text" class="form-control" id="alamat" value="<?php echo $m['alamat']; ?>">
                                        </div>
                                        
                                        <a href=""><button type="submit" class="btn btn-info btn-md btn-block">Ubah Data Pasien</button></a>  
										<br>
                                        <a href="listKonsultasi.php"><button type="button" class="btn btn-outline-link btn-md btn-block">Batal</button></a>
                                    </div>
									<hr>
                                </div>
                                <?php
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <?php
        include "footer.php";
    ?>

    <!-- Js Plugins -->
    <script src="source/js/jquery-3.3.1.min.js"></script>
    <script src="source/js/bootstrap.min.js"></script>
    <script src="source/js/jquery.magnific-popup.min.js"></script>
    <script src="source/js/masonry.pkgd.min.js"></script>
    <script src="source/js/jquery-ui.min.js"></script>
    <script src="source/js/jquery.nice-select.min.js"></script>
    <script src="source/js/jquery.slicknav.js"></script>
    <script src="source/js/owl.carousel.min.js"></script>
    <script src="source/js/main.js"></script>
</body>