<?php
    include "headerAdmin.php";
    include "model/classAJK.php";
    $db = new AturanJenisKulit();

?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="source/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Jenis Kulit</h2>
                        <div class="breadcrumb__links">
                            <a href="indexAdmin.php">Beranda</a>
                            <span>Jenis Kulit</span>
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
                          <h2>Edit Aturan Jenis Kulit</h2>
                        </div>
                            <form action ="controller/prosesAJK.php?aksi=update" method="post" class="form-horizontal">
								<?php 
									foreach ($db->edit($_GET['id']) as $m){
								?>
								<div class="card-body">
									<div class="col col-sm-8">
                                        <div class="form-group">
                                            <label>Parent</label><br>
                                            <select name="parent" class="form-control">
                                                <option value="-">-</option>
                                                    <?php 
                                                        foreach($fr->tampilFR() as $m) {
                                                    ?>
                                                        <option value="<?php print $m['ID_FR'];?>"> <?php print $m['ketFR']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pertanyaan</label><br>
                                            <select name="pertanyaan" class="form-control">
                                                <option value="-">-</option>
                                                    <?php 
                                                        foreach($fr->tampilFR() as $m) {
                                                    ?>
                                                        <option value="<?php print $m['ID_FR'];?>"> <?php print $m['ketFR']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jika Ya</label><br>
                                            <select name="ya" class="form-control">
                                                <option value="-">-</option>
                                                    <?php 
                                                        foreach($fr->tampilFR() as $m) {
                                                    ?>
                                                        <option value="<?php print $m['ID_FR'];?>"> <?php print $m['ketFR']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jika Tidak</label><br>
                                            <select name="tidak" class="form-control">
                                                <option value="-">-</option>
                                                    <?php 
                                                        foreach($fr->tampilFR() as $m) {
                                                    ?>
                                                        <option value="<?php print $m['ID_FR'];?>"> <?php print $m['ketFR']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Hasil</label><br>
                                            <select name="ID_JK" class="form-control">
                                                <option value="-">-</option>
                                                    <?php 
                                                        foreach($jk->tampilJK() as $m) {
                                                    ?>
                                                        <option value="<?php print $m['ID_JK'];?>"> <?php print $m['ketJK']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        
										<a href=""><button type="submit" class="btn btn-info btn-md btn-block">Ubah Aturan Jenis Kulit</button></a>  
										<br>
										<a href="aJenisKulit.php"><button type="button" class="btn btn-outline-link btn-md btn-block">Batal</button></a>
									</div>
									<hr>
								</div>
									<?php } ?>
							</form>
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