<?php
    include "headerAdmin.php";
    include "model/classAPenyakit.php";
    $db = new AturanPenyakit();
    include "model/classGejala.php";
    $gj = new Gejala();
    include "model/classPenyakit.php";
    $py = new Penyakit();
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="source/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Aturan Penyakit</h2>
                        <div class="breadcrumb__links">
                            <a href="indexAdmin.php">Beranda</a>
                            <span>Aturan Penyakit</span>
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
            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-md btn-info">
                <a  style="color:white">Tambah Aturan Penyakit </a>&nbsp;&nbsp;<i class="fa fa-plus"></i>
            </button><br><br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Parent</th>
                        <th style="text-align:center;">Pertanyaan</th>
                        <th style="text-align:center;">Ya</th>
                        <th style="text-align:center;">Tidak</th>
                        <th style="text-align:center;">Hasil</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
					$data = $db->tampilAturanGP();
					if($data!=0){
					    foreach($data as $m){
                        $i++;
                ?>
                    <tr>
                        <td style="text-align:center;"><?php print $i;?></td>
                        <td style="text-align:center;"><?php print $m['parent'];?></td>
                        <td style="text-align:center;"><?php print $m['pertanyaan'];?></td>
                        <td style="text-align:center;"><?php print $m['ya'];?></td>
                        <td style="text-align:center;"><?php print $m['tidak'];?></td>
                        <td style="text-align:center;"><?php print $m['ID_Penyakit'];?></td>
                        <td style="text-align:center;">
						    <a href="controller/prosesAPenyakit.php?id=<?php echo $m['ID_ruleGP']; ?>&aksi=hapus"><button class="btn btn-warning btn-sm"><i class="fa fa-trash-o "></i></button></a>
						</td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>

        <!-- Model Tambah Aturan Penyakit  -->
		<div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
                        <h4> Tambah Aturan Penyakit </h4>
						<align="right"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></align> 
					</div>
					<div class="modal-body">
						<form action="controller/prosesAPenyakit.php?aksi=tambah" method="post">
							<div class="form-group">
								<label>Parent</label><br>
								<select name="parent" class="form-control">
                                    <option value="-">-</option>
                                        <?php 
                                            foreach($gj->tampilGejala() as $m) {
                                        ?>
                                            <option value="<?php print $m['ID_Gejala'];?>"> <?php print $m['ketGejala']; ?></option>
                                        <?php
                                        }
                                        ?>
                                </select>
							</div>
							<div class="form-group">
                                <label>Pertanyaan</label><br>
								<select name="pertanyaan" class="form-control">
                                        <?php 
                                            foreach($gj->tampilGejala() as $m) {
                                        ?>
                                            <option value="<?php print $m['ID_Gejala'];?>"> <?php print $m['ketGejala']; ?></option>
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
                                            foreach($gj->tampilGejala() as $m) {
                                        ?>
                                            <option value="<?php print $m['ID_Gejala'];?>"> <?php print $m['ketGejala']; ?></option>
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
                                            foreach($gj->tampilGejala() as $m) {
                                        ?>
                                            <option value="<?php print $m['ID_Gejala'];?>"> <?php print $m['ketGejala']; ?></option>
                                        <?php
                                        }
                                        ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hasil</label><br>
								<select name="ID_Penyakit" class="form-control">
                                    <option value="-">-</option>
                                        <?php 
                                            foreach($py->tampilPenyakit() as $m) {
                                        ?>
                                            <option value="<?php print $m['ID_Penyakit'];?>"> <?php print $m['ketPenyakit']; ?></option>
                                        <?php
                                        }
                                        ?>
                                </select>
                            </div>
							<div class="modal-footer">
							<a href="aPenyakit.php"><button type="button" class="btn btn-default">Batal</button></a>
							<input type="submit" class="btn btn-info" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
        <!-- End Model Tambah Jenis Kulit -->

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

    <script src="source/vendor/bootstrap/js/popper.js"></script>
	<script src="source/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="source/vendor/select2/select2.min.js"></script>
</body>
