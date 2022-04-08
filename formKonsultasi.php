<?php
    include "model/classKonsul.php";
    $db = new konsul();
    include "header.php";
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="source/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Konsultasi</h2>
                        <div class="breadcrumb__links">
                            <a href="index.html">Beranda</a>
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
                            <span>KONSULTASI PERAWATAN KULIT WAJAH</span>
                            <h2>Klinik Dr. Ika</h2>
                        </div>
                        <form action="controller/prosesKS.php?aksi=tambah" method="post">

                            <div class="form-group" hidden>
								<label>ID Pasien</label>
								<input name="ID_Konsul" type="text" class="form-control" readonly value="<?php print $db->tampil_kode_pasien(); ?>">
                            </div>
                            <div class="form-group">
								<label>Nama Pasien</label>
								<input name="namaPasien" type="text" class="form-control" id="namaPasien" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
								<label>Usia Pasien</label>
								<input name="usia" type="number" class="form-control" id="usia" required oninvalid="this.setCustomValidity('Usia tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="jenisKelamin" id="jenisKelamin" class="form-control" required oninvalid="this.setCustomValidity('Jenis Kelamin tidak boleh kosong')" oninput="setCustomValidity('')">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
								<label>Nomor Handphone</label>
								<input name="noHP" type="number" class="form-control" id="noHP" required oninvalid="this.setCustomValidity('No HP tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
								<label>Alamat</label>
								<input name="alamat" type="text" class="form-control" id="alamat" required oninvalid="this.setCustomValidity('Alamat tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Konsultasi</label>
                                
                                <?php date_default_timezone_set('Asia/Jakarta');
                                $currentDateTime = date('d-m-Y H:i'); ?>

                                <input type="datetime" name="tglKonsul" id="tglKonsul" class="form-control" readonly value="<?php echo $currentDateTime ?>">
                            </div>

                            <button type="submit" class="site-btn">Submit</button>
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
