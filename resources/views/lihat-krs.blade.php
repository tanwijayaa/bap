<?php
    use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.9.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="home1">Home</a></li>
          <li><a class="nav-link scrollto" href="experience">Experience</a></li>
          <li><a class="nav-link scrollto" href="achievement">Achievement | Study</a></li>
          <li><a class="nav-link scrollto" href="contact">Contact</a></li>
          <li><a class="nav-link scrollto active" href="lihat-krs">Lihat KRS</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#experience" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h2>Welcome to my website</h2>
          <h1>I'm Amelia Tanwijaya<span></span></h1>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <p>Lihat KRS Saya</p>
            <br>
            <table> 
              <tr>
                <td>Nama</td>
                <td> : Amelia Tanwijaya</td>
              </tr>
              
              <tr>
                <td>Student ID</td>
                <td> : 03081200036</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td> : Perempuan</td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td> : 06 May 2002</td>
              </tr>
              <tr>
                <td>Term</td>
                <td> : Akselerasi</td>
              </tr>
            </table>
<br>


<a href="lihat-krs"><button type="button" class="btn btn-light">Akselerasi 2021/2022</button></a>
<a href="lihat-krsganjil"><button type="button" class="btn btn-dark">Ganjil 2022/2023</button></a>
<br>
<br>
          <table class="table table-striped table-hover">
            <tr>
                <th>Kode</th>
                <th>Nama Mata Kuliah </th>
                <th>SKS</th>
            </tr>
            <?php
            $mahasiswas = DB::select("SELECT * FROM UTS WHERE nama like '%Amelia%' ");
            foreach ($mahasiswas as $mahasiswa) {
                echo "<tr>";
                // echo "<td>".$mahasiswa->StudentID."</td>";
                echo "<td>".$mahasiswa->Kode_Matakuliah."</td>";
                echo "<td>".$mahasiswa->Nama_Matakuliah."</td>";
                echo "<td>".$mahasiswa->Sks."</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
          
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>