<?php
session_start();
function tanggal($tgl)
{
  $tanggal = substr($tgl, 8, 2);
  $bulan = getBulan(substr($tgl, 5, 2));
  $tahun = substr($tgl, 0, 4);
  return $tanggal . ' ' . $bulan . ' ' . $tahun;
}
function getBulan($bln)
{
  switch ($bln) {
    case 1:
      return "Januari";
      break;
    case 2:
      return "Februari";
      break;
    case 3:
      return "Maret";
      break;
    case 4:
      return "April";
      break;
    case 5:
      return "Mei";
      break;
    case 6:
      return "Juni";
      break;
    case 7:
      return "Juli";
      break;
    case 8:
      return "Agustus";
      break;
    case 9:
      return "September";
      break;
    case 10:
      return "Oktober";
      break;
    case 11:
      return "November";
      break;
    case 12:
      return "Desember";
      break;
  }
}
if (!empty($_COOKIE["usernameku"])) {
  $usernameku = $_COOKIE["usernameku"];
} else {
  $usernameku = "";
}
if (!empty($_COOKIE["passwordku"])) {
  $passwordku = $_COOKIE["passwordku"];
} else {
  $passwordku = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tugas PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
  <link rel="stylesheet" href="assets/home/css/animate.css" />
  <link rel="stylesheet" href="assets/home/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="assets/home/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/home/css/meanmenu.min.css" />
  <link rel="stylesheet" href="assets/home/css/venobox.css" />
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
  <link rel="stylesheet" href="assets/home/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/home/style.css" />
  <link rel="stylesheet" href="assets/home/css/responsive.css" />
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-ja5OB_qGcqyvktue"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="assets/ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="css/gaya.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
</head>

<body>

  <header id="header_area">
    <div class="header_top_area" style="background-color: #f6dcdc">
      <div class="container pt-3 pb-3">
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-4">
            <div class="hdr_tp_left">
            </div>
          </div>

          <div class="col-xs-8 col-sm-8 col-8 my-auto">
            <ul class="hdr_tp_right text-right">
              <?php if (!isset($_SESSION["pengguna"])) { ?>
                <button class="btn btn-danger btn-sm bundarpil mx-2" href="#" data-toggle="modal" data-target="#daftar">Daftar</button>
                <button class="btn btn-danger btn-sm bundarpil mx-2" href="#" data-toggle="modal" data-target="#login">Masuk</button>
              <?php } else { ?>
                <li class="lan_area">
                  <a href="#" style="font-size: 17px">
                    <table width="300px" class="pull-right">
                      <tr>
                        <td width="35%">
                          <i class="fa fa-user" style="font-size: 32px">&nbsp;</i>
                        </td>
                        <td width="50%" align="left">
                          <?= $_SESSION["pengguna"]['nama'] ?>
                        </td>
                      </tr>
                    </table>
                  </a>
                  <ul class="csub-menu" style="margin-left: 30px;margin-top:-10px">
                    <li><a href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Keluar</a></li>
                  </ul>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div style="background-color: #8B0E1A;height:5px"></div>
    <div class="header_btm_area" style="background-color: #f6dcdc">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9 text-right">
            <div class="">
              <div class="main-menu">
                <nav>
                  <ul>
                    <?php
                    $page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
                    if (!empty($_SESSION["pengguna"])) {
                    ?>
                      <li><a href="index.php" class="<?php if ($page == 'index.php' or $page == 'beranda.php') echo 'font-weight-bold text-danger'; ?>">Beranda</a></li>
                    <?php
                    } else { ?>
                      <li><a href="index.php" class="<?php if ($page == 'index.php' or $page == 'beranda.php') echo 'font-weight-bold text-danger'; ?>">Beranda</a></li>
                    <?php } ?>
                  </ul>
                </nav>
              </div>
              <div class="mobile-menu text-right">
                <nav>
                  <ul>
                    <?php
                    if (!empty($_SESSION["pengguna"])) {
                    ?>
                      <li><a href="index.php">Beranda</a></li>
                    <?php } else { ?>
                      <li><a href="index.php">Beranda</a></li>
                    <?php } ?>
                  </ul>
                </nav>
              </div>
              <div class="right_menu">
                <ul class="nav justify-content-end">
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="background-color: #8B0E1A;height:7px"></div>
  </header>

  </header>
  <!-- modal -->
  <div class="modal fade modaldaftar" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content" style="border-radius: 50px;border:3px solid red">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-">
          <div class="row align-items-end">
            <div class="col-md-12">
              <div class="mt-5 ml-5 mr-5 mb-3">
                <h3 class="mb-3 text-center text-danger">DAFTAR</h3>
                <form action="" method="post">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                      <input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password" value="" autocomplete="off" required />
                      <span class="input-group-text togglePassword">
                        <i data-feather="eye" class="fa fa-eye" style="cursor: pointer;padding-top:5px"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" value="" class="form-control" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" value="" class="form-control" placeholder="Alamat" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">No. Whatsapp</label>
                    <input type="number" name="nowa" value="" class="form-control" placeholder="No. Whatsapp" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">No. Telepon</label>
                    <input type="number" name="telepon" value="" class="form-control" placeholder="No. Telp" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="" class="form-control" placeholder="Email" required>
                  </div>
                  <center>
                    <div class="form-group">
                      <button class="btn btn-outline-danger btn-sm" name="daftar" value="daftar" type="submit">Daftar</button>
                    </div>
                  </center>
                </form>
                <center>
                  <p>Sudah Punya Akun ? <a href="#" class="text-danger modalloginbuka">Masuk</a></p>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade modallogin" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content" style="border-radius: 50px;border:3px solid red">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-">
          <div class="row">
            <div class="col-md-12">
              <div class="m-5">
                <h3 class="mb-3 text-center text-danger">Tugas PHP</h3>
                <form action="login.php" method="post" class="form" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" value="<?= $usernameku ?>" class="form-control" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                      <input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password" value="<?= $passwordku ?>" required />
                      <span class="input-group-text togglePassword">
                        <i data-feather="eye" class="fa fa-eye" style="cursor: pointer;padding-top:5px"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember" value="">
                    <label class="form-check-label">Ingat Saya</label>
                  </div>
                  <center>
                    <div class="form-group">
                      <button class="btn btn-outline-danger btn-sm" name="login" value="login" type="submit">Masuk</button>
                    </div>
                  </center>
                </form>
                <center>
                  <p>Belum Punya Akun ? <a href="#" class="text-danger modaldaftarbuka">Daftar</a></p>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal -->
  <?php
  if (isset($_POST["daftar"])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $nowa = $_POST['nowa'];
    $username = $_POST['username'];

    if (isset($_SESSION[$username])) {
      echo "<script>alert('Pendaftaran Gagal, username sudah terdaftar')</script>";
      echo "<script>location='index.php';</script>";
    } else {
      $_SESSION[$username]['nama'] = $nama;
      $_SESSION[$username]['email'] = $email;
      $_SESSION[$username]['password'] = $password;
      $_SESSION[$username]['alamat'] = $alamat;
      $_SESSION[$username]['telepon'] = $telepon;
      $_SESSION[$username]['nowa'] = $nowa;
      $_SESSION[$username]['foto'] = "";
      echo "<script>alert('Pendaftaran Berhasil, Silahkan login')</script>";
      echo "<script>location='index.php';</script>";
    }
  }
  ?>