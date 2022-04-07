<?php
session_start();
include_once 'proseslogin.php';
$user = new userController();

	if (isset($_POST['submit'])) { 
    	extract($_POST);   
    	$login = $user->check_login($username, $password);
    	if ($login == true) {
        	header("location:listKonsultasi.php");
    	}
    	else{
			
    		header("location:login.php?pesan=gagal");
     	}
	} 
?>

<?php 
?>
<?php
  include "header.php";
?>

<body>

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <div class="consultation__form">
                        <div class="section-title">
                            <span>LOGIN AS ADMIN</span>
                            <h2>Klinik Dr. Ika</h2>
                        </div>
                        <form action="" method="post" name="login">
                            <input type="text" placeholder="Username" name="username">
                            <input type="password" placeholder="Password" name="password">
							<button type="submit" class="site-btn" name="submit" value="Login">Login</button>
							<?php 
                                $pesan='';
                                if(isset($_GET['pesan'])){ $pesan=$_GET['pesan'];}
                                if($pesan=='gagal'){
                                    echo "<p style='color:red'>Periksa kembali <i>username</i> dan <i>password</i> anda.</p>";
                                }
                            ?>		
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
