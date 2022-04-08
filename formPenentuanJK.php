<?php
  include "header.php";
  include "koneksi2.php";
  include "model/classKonsul.php";
  $db = new konsul();

  
  $ID_Konsul = $_GET['ID_Konsul'];
  $ID_FR = $_GET['ID_FR'];
  $parent = $_GET['parent'];
  $solusi = "";
  $ya = $_GET['ya'];
  if($ya == 1){
    mysqli_query($con, "INSERT INTO temp_ya_rulefr(pertanyaan)VALUES('$parent')");
  }
?>
<body>
    <hr><br>
        <div class="container">
            <?php 
                if(($ID_FR == 'FR001') AND ($parent == '-')){
                    ?>
                    <div class="section-title">
                        <span>Konsultasi</span>
                        <h2>Penentuan Jenis Kulit Pasien</h2>
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
                else if(($ID_FR != '-') AND ($parent != '-')){
                            ?>
                    <div class="section-title">
                        <span>Konsultasi</span>
                        <h2>Penentuan Jenis Kulit Pasien</h2>
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
                                    if ($ID_FR != '-'){
                                        mysqli_query($con, "INSERT INTO temp_rulefr(pertanyaan)VALUES('$parent')");
                                    }
                                    $data = mysqli_query($con, "SELECT * FROM faktorresiko WHERE ID_FR = '$ID_FR'");
                                    while ($d = mysqli_fetch_array($data)) {
                                        echo $hasil = $d['tanyaFR'];

                                        $data1 = mysqli_query($con, "SELECT * FROM rulefr WHERE parent = '$parent' AND pertanyaan = '$ID_FR'");
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
                                            <a href="formPenentuanJK.php?ya=1&ID_Konsul=<?php echo $ID_Konsul?>&ID_FR=<?php echo $ya?>&parent=<?php echo $ID_FR;?>"><button type="submit" class="btn btn-info" value="ya" >Ya</button></a>
                                            <a href="formPenentuanJK.php?ya=0&ID_Konsul=<?php echo $ID_Konsul?>&ID_FR=<?php echo $tidak?>&parent=<?php echo $ID_FR;?>"><button type="submit" class="btn btn-danger" value="tidak">Tidak</button></a>
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
                        if($ID_FR == '-'){
                            ?>
                            <div class="col-lg-12 col-md-12">
                                <div class="about__text">
                                    <div class="section-title">
                                        <span>Jenis Kulit</span>
                                        <h2>Hasil Konsultasi Anda</h2>
                                    </div>
                                    
                                    <p>Berikut adalah faktor resiko terpilih:</p>
                                    <?php
                                        $temp = '';
                                        $sql = mysqli_query($con, "SELECT DISTINCT pertanyaan FROM temp_ya_rulefr");
                                        while ($m = mysqli_fetch_array($sql)) {
                                            $list = $m['pertanyaan'];
                                            $list_ket = $db->tampil_ketFR($list);
                                            $temp = $temp.' '.$list_ket.', ';
                                            if($list != NULL){
                                            ?>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i><?php echo $db->tampil_ketFR($list); ?></li>
                                                </ul>
                                            <?php
                                            }else{
                                            }
                                            
                                        }
                                        mysqli_query($con, "UPDATE konsultasi SET hasilFRTerpilih = '$temp' WHERE ID_Konsul = '$ID_Konsul'");
                                        
                                        $data = mysqli_query($con, "SELECT max(ID_temp) as maxKode FROM temp_rulefr");
                                        while ($max = mysqli_fetch_array($data)) {
                                            $solusi_parent = $max['maxKode'];

                                            $p1 = mysqli_query($con, "SELECT * FROM temp_rulefr WHERE ID_temp = '$solusi_parent'");
                                            while ($r1 = mysqli_fetch_array($p1)) {
                                                $sol_parent = $r1['pertanyaan'];
                                            }
                                            $data2 = mysqli_query($con, "SELECT * FROM rulefr WHERE parent = '$sol_parent' AND pertanyaan = '$parent'");
                                                while ($d2 = mysqli_fetch_array($data2)) {
                                                $solusi = $d2['ID_JK'];
                                                mysqli_query($con, "UPDATE konsultasi set ID_JK = '$solusi' WHERE ID_Konsul = '$ID_Konsul'");

                                            }

                                            $data2 = mysqli_query($con, "SELECT * FROM jeniskulit WHERE ID_JK = '$solusi'");
                                                while ($d2 = mysqli_fetch_array($data2)) {
                                    ?>   
                                    <p>Kulit wajah Anda tergolong ke dalam tipe <b><?php echo $d2['ketJK']; ?></b></p>
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
                                        <p>Pilih tombol berikut jika ingin menyelesaikan atau melanjutkan ke konsultasi penentuan penyakit kulit</p>
                                        <a href="hasilKonsul_JK_print.php?id=<?php echo $ID_Konsul; ?>" class="primary-btn normal-btn">Print Hasil Konsultasi</a>
                                        <a href="index.php" class="primary-btn normal-btn">Selesai</a>
                                        <a href="controller/prosesKS.php?ID_Konsul=<?php echo $ID_Konsul; ?>&aksi=konsulGP" class="primary-btn normal-btn">Lanjutkan</a><br><br>
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
