<?php
session_start();
require_once'helpers/security.php';
$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="As Gıda Maddeleri Tic. ve Ltd. Şti">
    <meta name="author" content="As Gıda">
    <meta name="keywords" content="As Gıda Çanakkale,As Gıda,Çanakkale Gıda Dağıtım,Çanakkale Gıda Toptancısı">

    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <title>AS GIDA MADDELERİ TİC. VE LTD. ŞTİ.</title>
    <link rel="shortcut icon" href="ikon.ico" />

</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> (0286) 213 34 55</a>
                        <a href="mailto:info@asgidacanakkale.com"><span class="fa fa-paper-plane mr-1"></span> info@asgidacanakkale.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media mr-4">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index"><img src="img/aslogo.png" alt="As Gıda Maddeleri Tic. ve Ltd. Şti." /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index" class="nav-link">Ana Sayfa</a></li>
                    <li class="nav-item"><a href="hizmetbolgelerimiz" class="nav-link">Hizmet Bölgelerimiz</a></li>
                    <li class="nav-item"><a href="markalar" class="nav-link">Markalar</a></li>
                    <li class="nav-item"><a href="urunlerimiz" class="nav-link">Ürünler</a></li>
                    <li class="nav-item active"><a href="iletisim" class="nav-link">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('img/contact.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index">Ana Sayfa <i class="fa fa-chevron-right"></i></a></span> <span>İletişim <i class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">İletişim</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper px-md-4">
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span></span> İsmetpaşa Mahallesi<br>Onurcan Sokak No: 22/A<br>17000 Çanakkale/Merkez</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span></span> <a href="#">(0286) 213 34 55</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span></span> <a href="mailto:info@asgidacanakkale.com">info@asgidacanakkale.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span></span> <a href="index">asgidacanakkale.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Bizimle İletişime Geçin</h3>
                                    <div class="panel">
                                        <?php if(!empty($errors)):?>
                                        <div class="panel">
                                            <ul>
                                                <li><?php echo implode('</li> <li>', $errors)?></li>
                                            </ul>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <form method="post" action="contact" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Adınız *</label>
                                                    <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Lütfen Adınızı Giriniz" <?php echo isset ($fields['name'])? 'value="'.e($fields['name']).'"':''?>>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">E-mail Adresiniz * </label>
                                                    <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Lütfen E-mail Adresinizi Giriniz" <?php echo isset ($fields['email'])? 'value="'.e($fields['email']).'"':''?>>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="message">Mesajınız *</label>
                                                    <textarea class="form-control" rows="8" id="comment" name="message" placeholder="Lütfen Mesajınızı Giriniz" <?php echo isset ($fields['message'])? e($fields['message']):''?>></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="GÖNDER" class="btn btn-primary" id="contact-submit">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3049.8538208218883!2d26.4252443153876!3d40.14553977939755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x68e77b4b6e6dcb9d!2zQXMgR8SxZGE!5e0!3m2!1str!2str!4v1542191401713" width="1920" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <a class="navbar-brand" href=""><img src="img/aslogo.png" alt="As Gıda Maddeleri Tic. ve Ltd. Şti." /></a>
                        <p>Yaşamında Hareket, İyi Beslenme Olsun; Sağlığın Hep Yerinde Olsun...</p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Sayfalar</h2>
                        <ul class="list-unstyled">
                            <li><a href="index"><span class="fa fa-chevron-right mr-2"></span>Ana Sayfa</a></li>
                            <li><a href="hizmetbolgelerimiz"><span class="fa fa-chevron-right mr-2"></span>Hizmet Bölgelerimiz</a></li>
                            <li><a href="markalar"><span class="fa fa-chevron-right mr-2"></span>Markalar</a></li>
                            <li><a href="urunlerimiz"><span class="fa fa-chevron-right mr-2"></span>Ürünler</a></li>
                            <li><a href="iletisim"><span class="fa fa-chevron-right mr-2"></span>İletişim</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Ürünler</h2>
                        <ul class="list-unstyled">
                            <li><a href="urunlerimiz"><span class="fa fa-chevron-right mr-2"></span>Süt Ürünleri</a></li>
                            <li><a href="urunlerimiz"><span class="fa fa-chevron-right mr-2"></span>Şarküteri Ürünleri</a></li>
                            <li><a href="urunlerimiz"><span class="fa fa-chevron-right mr-2"></span>Turşu Ürünleri</a></li>
                            <li><a href="urunlerimiz"><span class="fa fa-chevron-right mr-2"></span>Donuk Ürünler</a></li>
                            <li><a href="urunlerimiz"><span class="fa fa-chevron-right mr-2"></span>Konserve Ürünler</a></li>
                            <li><a href="urunlerimiz"><span class="fa fa-chevron-right mr-2"></span>Piknik Kahvaltılık Ürünler</a></li>
                            <li><a href="urunlerimiz"><span class="fa fa-chevron-right mr-2"></span>Ketçap-Mayonez Ürünleri</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">İletişim</h2>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i>İsmetpaşa Mahallesi<br>Onurcan Sokak No: 22/A<br>17000 Çanakkale/Merkez</li>
                            <li class="style-2">
                                <i class="fa fa-phone"></i>
                                <span>(0286) 213 34 55</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a class="text-light" href="mailto:info@asgidacanakkale.com">info@asgidacanakkale.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="mb-0" style="color: rgba(255,255,255,.5);">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> As Gıda Maddeleri Tic. ve Ltd. Şti. | Tüm Hakları Saklıdır.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <!--    <script src="js/google-map.js"></script>-->
    <script src="js/main.js"></script>

</body>

</html>
