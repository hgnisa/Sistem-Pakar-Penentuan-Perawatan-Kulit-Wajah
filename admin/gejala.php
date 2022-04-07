<?php
    include "headerAdmin.php";
    include "model/classGejala.php";
    $db = new Gejala();
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="source/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Gejala</h2>
                        <div class="breadcrumb__links">
                            <a href="indexAdmin.php">Beranda</a>
                            <span>Gejala</span>
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
                <a  style="color:white">Tambah Gejala </a>&nbsp;&nbsp;<i class="fa fa-plus"></i>
            </button><br><br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Kode Gejala</th>
                        <th style="text-align:center;">Keterangan</th>
                        <th style="text-align:center;">Pertanyaan</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
					$data = $db->tampilGejala();
					if($data!=0){
					    foreach($data as $m){
                        $i++;
                ?>
                    <tr>
                        <td style="text-align:center;"><?php print $i;?></td>
                        <td style="text-align:center;"><?php print $m['ID_Gejala'];?></td>
                        <td style="text-align:center;"><?php print $m['ketGejala'];?></td>
                        <td style="text-align:center;"><?php print $m['tanyaGejala'];?></td>
                        <td style="text-align:center;">
							<a href="editGejala.php?id=<?php echo $m['ID_Gejala'];?>&aksi=edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
						    <a href="controller/prosesGejala.php?id=<?php echo $m['ID_Gejala']; ?>&aksi=hapus"><button class="btn btn-warning btn-sm"><i class="fa fa-trash-o "></i></button></a>
						</td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>

        <!-- Model Tambah Gejala  -->
		<div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
                        <h4> Tambah Gejala </h4>
						<align="right"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></align> 
					</div>
					<div class="modal-body">
						<form action="controller/prosesGejala.php?aksi=tambah" method="post">
							<div class="form-group">
								<label>Kode Gejala</label>
								<input name="ID_Gejala" type="text" class="form-control" readonly value="<?php print $db->tampil_kode_Gejala(); ?>">
							</div>
							<div class="form-group">
								<label>Keterangan Gejala</label>
								<input name="ketGejala" type="text" class="form-control">
                            </div>
                            <div class="form-group">
								<label>Pertanyaan Gejala</label>
								<input name="tanyaGejala" type="text" class="form-control">
							</div>
							<div class="modal-footer">
							<a href="gejala.php"><button type="button" class="btn btn-default">Batal</button></a>
							<input type="submit" class="btn btn-info" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
        <!-- End Model Tambah Faktor Resiko -->

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
