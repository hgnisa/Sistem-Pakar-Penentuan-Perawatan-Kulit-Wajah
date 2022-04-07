<?php
  include "headerAdmin.php";
  include "../koneksi2.php";
  include "../model/classKonsul.php";
  include "model/classPenyakit.php";
  $db = new konsul();
  $py = new Penyakit();

?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="source/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Detail Konsultasi</h2>
                        <div class="breadcrumb__links">
                            <a href="indexAdmin.php">Beranda</a>
                            <span>Detail Konsultasi</span>
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
            <div class="section-title">
                <span>HASIL KONSULTASI</span>
                <h2>Klinik Dr. Ika</h2><br><br>

                <!-- Data Pasien -->

                <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="text-align:center;">Hasil Jenis Kulit</th>
                        <th style="text-align:center;">Hasil Penyakit</th>
                        <th style="text-align:center;">Hasil Faktor Resiko Terpilih</th>
                        <th style="text-align:center;">Hasil Gejala Terpilih</th>
                        <th style="text-align:center;">Hasil Rekomendasi Home Product</th>
                        <th style="text-align:center;">Hasil Rekomendasi Treatment</th>
                    </tr>
                </thead>
                <tbody>
                <?php
					$data = $db->tampilKS_Satu($_GET['id']);
					if($data!=0){
					    foreach($data as $m){
                            $jk = $db->tampil_ketJK($m['ID_JK']);
                            $penyakit = $db->tampil_ketPenyakit($m['ID_Penyakit']);
                            $ID_HP = $py->tampilHP($m['ID_Penyakit']);
                            $ketHP = $py->tampilketHP($ID_HP);
                ?>
                    <tr>
                        <td style="text-align:center;">
                        <?php 
                        if($jk == NULL){
                            echo "-";
                        }
                            echo $jk;
                        ?>
                        </td>
                        <td style="text-align:center;">
                        <?php 
                        if($penyakit == NULL){
                            echo "-";
                        }
                            echo $penyakit;
                        ?>
                        </td>
                        <td style="text-align:center;"><?php print $m['hasilFRTerpilih']; ?></td>
                        <td style="text-align:center;"><?php print $m['hasilGejalaTerpilih']; ?></td>
                        <td style="text-align:center;"><?php print $ketHP; ?></td>
                        <td style="text-align:center;"><?php print $py->tampilopsiTR($m['ID_Penyakit']); ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>

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
