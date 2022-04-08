<?php
  include "header.php";
  include "koneksi2.php";
  include "model/classKonsul.php";
  $db = new konsul();

  $ID_Konsul = $_GET['ID_Konsul'];
  $ID_Gejala = $_GET['ID_Gejala'];
  $parent = $_GET['parent'];
  $solusi = "";
  $ya = $_GET['ya'];
  if($ya == 1){
    mysqli_query($con, "INSERT INTO temp_ya_rulegp(pertanyaan)VALUES('$parent')");
  }

?>
<body>
    <hr><br>
        <div class="container">
            <?php 
                if(($ID_Gejala == 'G001') AND ($parent == '-')){
                    ?>
                    <div class="section-title">
                        <span>Konsultasi</span>
                        <h2>Penentuan Penyakit Kulit Wajah Pasien</h2>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pertanyaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                }
                else if(($ID_Gejala != '-') AND ($parent != '-')){
                            ?>
                    <div class="section-title">
                        <span>Konsultasi</span>
                        <h2>Penentuan Penyakit Kulit Wajah Pasien</h2>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pertanyaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                }
                else{
                }
                ?>
                                <td>
                                <?php
                                    if (($parent != '-') && ($ID_Gejala != '-')){
                                        mysqli_query($con, "INSERT INTO temp_rulegp(pertanyaan)VALUES('$parent')");
                                    }
                                    $data = mysqli_query($con, "SELECT * FROM gejala WHERE ID_Gejala = '$ID_Gejala'");
                                    while ($d = mysqli_fetch_array($data)) {
                                        echo $hasil = $d['tanyaGejala'];

                                        $data1 = mysqli_query($con, "SELECT * FROM rulegp WHERE parent = '$parent' AND pertanyaan = '$ID_Gejala'");
                                        while ($d1 = mysqli_fetch_array($data1)) {
                                            $ya = $d1['ya'];
                                            $tidak = $d1['tidak'];
                                    echo "
                                </td>
                            </tr>
                            <tr>
                                <td>";
                                    if(($ya != NULL) && ($tidak != NULL)){
                                        ?>
                                            <a href="formPenentuanGP.php?ya=1&ID_Konsul=<?php echo $ID_Konsul?>&ID_Gejala=<?php echo $ya?>&parent=<?php echo $ID_Gejala;?>"><button type="submit" class="btn btn-info" value="ya" >Ya</button></a>
                                            <a href="formPenentuanGP.php?ya=0&ID_Konsul=<?php echo $ID_Konsul?>&ID_Gejala=<?php echo $tidak?>&parent=<?php echo $ID_Gejala;?>"><button type="submit" class="btn btn-danger" value="tidak">Tidak</button></a>
                                        <?php
                                        }
                                    }
                                }
                                ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <?php 
                        if($ID_Gejala == '-'){
                            ?>
                            <div class="col-lg-12 col-md-12">
                                <div class="about__text">
                                    <div class="section-title">
                                        <span>Penyakit Kulit Wajah</span>
                                        <h2>Hasil Konsultasi Anda</h2>
                                    </div>
                                    <p>Berikut adalah gejala terpilih:</p>
                                    <?php
                                        $temp = '';
                                        $sql = mysqli_query($con, "SELECT DISTINCT pertanyaan FROM temp_ya_rulegp");
                                        while ($m = mysqli_fetch_array($sql)) {
                                            $list = $m['pertanyaan'];
                                            $list_ket = $db->tampil_ketGejala($list);
                                            $temp = $temp.' '.$list_ket.', ';
                                            if($list != NULL){
                                                ?>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle"></i><?php echo $db->tampil_ketGejala($list); ?></li>
                                                    </ul>
                                                <?php
                                        
                                                }else{
                                                }
                                                
                                            }
                                            mysqli_query($con, "UPDATE konsultasi SET hasilGejalaTerpilih = '$temp' WHERE ID_Konsul = '$ID_Konsul'");
                                    
                                        $data = mysqli_query($con, "SELECT max(ID_tempGP) as maxKode FROM temp_rulegp");
                                        while ($max = mysqli_fetch_array($data)) {
                                            $solusi_parent = $max['maxKode'];

                                            $p1 = mysqli_query($con, "SELECT * FROM temp_rulegp WHERE ID_tempGP = '$solusi_parent'");
                                            while ($r1 = mysqli_fetch_array($p1)) {
                                                $sol_parent = $r1['pertanyaan'];
                                            }
                                            
                                            $data2 = mysqli_query($con, "SELECT * FROM rulegp WHERE parent = '$sol_parent' AND pertanyaan = '$parent'");
                                                while ($d2 = mysqli_fetch_array($data2)) {
                                                $solusi = $d2['ID_Penyakit'];
                                                mysqli_query($con, "UPDATE konsultasi set ID_Penyakit = '$solusi' WHERE ID_Konsul = '$ID_Konsul'");
                                            }

                                            $data2 = mysqli_query($con, "SELECT * FROM penyakit WHERE ID_Penyakit = '$solusi'");
                                                while ($d2 = mysqli_fetch_array($data2)) {
                                                    $ID_penyakit = $d2['ketPenyakit'];
                                                    $ID_HP = $d2['ID_HP'];
                                                    $treatment = $d2['opsiTR'];
                                    ?>   
                                    <p>Anda teridentifikasi memiliki penyakit kulit wajah berupa <b><?php echo $d2['ketPenyakit']; ?><b></p>
                                    <?php
                                                    $data3 = mysqli_query($con, "SELECT * FROM homeproduct WHERE ID_HP = '$ID_HP'");
                                                    while ($d3 = mysqli_fetch_array($data3)) {
                                                        $ketHP = $d3['ketHP'];
                                     ?>
                                     <p>Rekomendasi home product yang bisa digunakan adalah <b><?php echo $ketHP; ?></b></p>
                                     <?php
                                                    }
                                    ?>
                                    <p>Rekomendasi treatment yang bisa dilakukan adalah <br> <b><?php echo $treatment; ?></b></p>
                                    <?php
                                            }

                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="about__text">
                                    <center>
                                        <br>
                                        <hr>
                                        <p>Pilih tombol berikut jika ingin menyelesaikan konsultasi penentuan penyakit kulit wajah</p>
                                        <a href="hasilKonsul_GP_print.php?id=<?php echo $ID_Konsul; ?>" class="primary-btn normal-btn">Print Hasil Konsultasi</a>
                                        <a href="index.php" class="primary-btn normal-btn">Selesai</a><br><br>
                                    </center>
                                </div>
                            </div>
                            <?php
                        }
                    ?>   
        </div>

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
