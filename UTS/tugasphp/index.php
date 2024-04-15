<?php include 'header.php'; ?>
<div class="jumbotron jumbotron-fluid jumbotronatas">
	<div class="container">
		<p class="text-white text-left" style="font-size:20pt;line-height:33px"><b>Selamat Datang</b>
			<?php
			if (!empty($_SESSION["pengguna"])) {
				echo $_SESSION['pengguna']['nama'];
			} else {
				echo "<br>Silahkan Daftar";
			}
			?>
		</p>
	</div>
</div>
<div class="container">
	<br>
	<?php
	if (!empty($_SESSION["pengguna"])) {
	?>
		<div class="row mb-5">
			<div class="col-md-12">
				<form method="post" enctype="multipart/form-data">
					<center>
						<?php
						if ($_SESSION['pengguna']['foto'] == '') { ?>
							<img alt="image" src="foto/user.png" width="100px" style="border-radius:10px">
						<?php } else { ?>
							<img alt="image" src="foto/<?= $_SESSION['pengguna']['foto'] ?>" width="100px" style="border-radius:10px">
						<?php } ?>
					</center>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" value="<?= $_SESSION['pengguna']['nama'] ?>" class="form-control" placeholder="Nama Lengkap" required>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" value="<?= $_SESSION['pengguna']['username'] ?>" class="form-control" placeholder="Username" readonly>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea type="text" name="alamat" class="form-control" placeholder="Alamat" rows="1"><?= $_SESSION['pengguna']['alamat'] ?></textarea>
					</div>
					<div class="form-group">
						<label>No. Whatsapp</label>
						<input type="number" name="nowa" value="<?= $_SESSION['pengguna']['nowa'] ?>" class="form-control" placeholder="No. Whatsapp">
					</div>
					<div class="form-group">
						<label>No. Telp</label>
						<input type="number" name="telepon" value="<?= $_SESSION['pengguna']['telepon'] ?>" class="form-control" placeholder="No. Telp">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="<?= $_SESSION['pengguna']['email'] ?>" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" value="<?= $_SESSION['pengguna']['password'] ?>" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<label>Foto</label>
						<input type="file" name="foto" class="form-control">
					</div>
					<div class="form-group">
						<center>
							<button type="submit" name="edit" value="edit" class="btn btn-danger">Simpan</button>
						</center>
					</div>
				</form>
				<br>
				<br>
			</div>
		</div>
	<?php
	}
	?>
</div>
<?php

if (isset($_POST['edit'])) {

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$nowa = $_POST['nowa'];
	$password = $_POST['password'];
	$username = $_POST['username'];


	$namafoto = $_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];


	if (!empty($lokasifoto)) {

		move_uploaded_file($lokasifoto, "foto/$namafoto");
		$foto = $namafoto;
	} else {

		$foto = $_SESSION['pengguna']['foto'];
	}


	$_SESSION['pengguna']['nama'] = $nama;
	$_SESSION['pengguna']['email'] = $email;
	$_SESSION['pengguna']['telepon'] = $telepon;
	$_SESSION['pengguna']['alamat'] = $alamat;
	$_SESSION['pengguna']['nowa'] = $nowa;
	$_SESSION['pengguna']['foto'] = $foto;
	$_SESSION['pengguna']['username'] = $username;
	$_SESSION['pengguna']['password'] = $password;

	$_SESSION[$username]['nama'] = $nama;
	$_SESSION[$username]['email'] = $email;
	$_SESSION[$username]['password'] = $password;
	$_SESSION[$username]['alamat'] = $alamat;
	$_SESSION[$username]['telepon'] = $telepon;
	$_SESSION[$username]['nowa'] = $nowa;
	$_SESSION[$username]['foto'] = $foto;

	echo "<script>alert('Data Berhasil Di Simpan');</script>";
	echo "<script>location ='index.php';</script>";
}
?>

?>
<script src="assets/home/js/materialize.min.js"></script>
<script src="assets/home/js/bootstrap.min.js"></script>
<script src="assets/home/js/jquery.meanmenu.min.js"></script>
<script src="assets/home/js/jquery.mixitup.js"></script>
<script src="assets/home/js/jquery.counterup.min.js"></script>
<script src="assets/home/js/waypoints.min.js"></script>
<script src="assets/home/js/wow.min.js"></script>
<script src="assets/home/js/venobox.min.js"></script>
<script src="assets/home/js/owl.carousel.min.js"></script>
<script src="assets/home/js/simplePlayer.js"></script>
<script src="assets/home/js/main.js"></script>
<script src="assets/home/js/sweetalert2.all.min.js"></script>
<script src="
<script>
	feather.replace({
		'aria-hidden': 'true'
	});
	$(" .togglePassword").click(function(e) { e.preventDefault(); var type=$(this).parent().parent().find(".password").attr("type"); console.log(type); if (type=="password" ) { $(this).parent().parent().find("svg.feather.feather-eye").replaceWith(feather.icons["eye-off"].toSvg()); $(this).parent().parent().find(".password").attr("type", "text" ); } else if (type=="text" ) { $(this).parent().parent().find("svg.feather.feather-eye-off").replaceWith(feather.icons["eye"].toSvg()); $(this).parent().parent().find(".password").attr("type", "password" ); } }); </script>
	<script>
	$(document).ready(function() {
		$('#tabel').DataTable();
	});
	$(document).ready(function() {
		$('#tabel2').DataTable();
	});
	$(document).ready(function() {
		$('#tabel3').DataTable();
	});
	$(function() {
		$(".modalloginbuka").on('click', function() {
			$('.modaldaftar').modal('hide');
			$('.modallogin').modal('show');
		});
	});
	$(function() {
		$(".modaldaftarbuka").on('click', function() {
			$('.modallogin').modal('hide');
			$('.modaldaftar').modal('show');
		});
	});
</script>
</body>

</html>