<?php
  include "headerAdmin.php";
  include "../koneksi2.php";
  include "../model/classKonsul.php";
  $db = new konsul();
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
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th style="text-align:center;">No.</th>
                    <th style="text-align:center;" hidden>ID Pasien</th>
                    <th style="text-align:center;">Nama Pasien</th>
                    <th style="text-align:center;">Usia</th>
                    <th style="text-align:center;">Jenis Kelamin</th>
                    <th style="text-align:center;">No Handphone</th>
                    <th style="text-align:center;">Alamat</th>
                    <th style="text-align:center;">Tanggal Konsultasi</th>
                    <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
                   $data = mysqli_query($con, "SELECT * FROM konsultasi");
                    while ($m = mysqli_fetch_array($data)) {
                    $i++;
                ?>
                    <tr>
                        <td style="text-align:center;"><?php print $i;?></td>
                        <td style="text-align:center;" hidden><?php print $m['ID_Konsul'];?></td>
                        <td style="text-align:center;"><?php print $m['namaPasien'];?></td>
                        <td style="text-align:center;"><?php print $m['usia'];?></td>
                        <td style="text-align:center;"><?php print $m['jenisKelamin'];?></td>
                        <td style="text-align:center;"><?php print $m['noHP'];?></td>
                        <td style="text-align:center;"><?php print $m['alamat'];?></td>
                        <td style="text-align:center;"><?php print $m['tglKonsul'];?></td>

                        <td style="text-align:center;">
                            <a href="detailKS.php?id=<?php echo $m['ID_Konsul']; ?>" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
							<a href="editKS.php?id=<?php echo $m['ID_Konsul']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
						    <a href="../controller/prosesKS.php?id=<?php echo $m['ID_Konsul']; ?>&aksi=hapus"><button class="btn btn-warning btn-sm"><i class="fa fa-trash-o "></i></button></a>
						</td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
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
