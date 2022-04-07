<?php
    include "headerAdmin.php";
    include "model/classJK.php";
    $db = new JenisKulit();
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
            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-md btn-info">
                <a  style="color:white">Tambah Jenis Kulit </a>&nbsp;&nbsp;<i class="fa fa-plus"></i>
            </button><br><br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Kode Jenis Kulit</th>
                        <th style="text-align:center;">Keterangan</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
					$data = $db->tampilJK();
					if($data!=0){
					    foreach($data as $m){
                        $i++;
                ?>
                    <tr>
                        <td style="text-align:center;"><?php print $i;?></td>
                        <td style="text-align:center;"><?php print $m['ID_JK'];?></td>
                        <td style="text-align:center;"><?php print $m['ketJK'];?></td>
                        <td style="text-align:center;">
							<a href="editJK.php?id=<?php echo $m['ID_JK'];?>&aksi=edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
						    <a href="controller/prosesJK.php?id=<?php echo $m['ID_JK']; ?>&aksi=hapus"><button class="btn btn-warning btn-sm"><i class="fa fa-trash-o "></i></button></a>
						</td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>

        <!-- Model Tambah Jenis Kulit  -->
		<div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
                        <h4> Tambah Jenis Kulit </h4>
						<align="right"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></align> 
					</div>
					<div class="modal-body">
						<form action="controller/prosesJK.php?aksi=tambah" method="post">
							<div class="form-group">
								<label>Kode Jenis Kulit</label>
								<input name="ID_JK" type="text" class="form-control" readonly="" value="<?php print $db->tampil_kode_JK(); ?>">
							</div>
							<div class="form-group">
								<label>Keterangan Jenis Kulit</label>
								<input name="ketJK" type="text" class="form-control">
                            </div>
							<div class="modal-footer">
							<a href="jenisKulit.php"><button type="button" class="btn btn-default">Batal</button></a>
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
