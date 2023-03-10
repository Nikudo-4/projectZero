<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

      <!-- Stylesheets -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/css/fontawesome.css" />
    <link rel="stylesheet" href="/public/css/flaticon.css" />
    <link rel="stylesheet" href="/public/css/slick.css" />
    <link rel="stylesheet" href="/public/css/lightgallery.min.css" />
    <link rel="stylesheet" href="/public/css/animate.css" />
    <link rel="stylesheet" href="/public/css/style.css" />
    
</head>
    <body class="st-blue">
    <!-- Start Header Section -->
    <header class="st-site-header st-style1 st-sticky-header">
        <div class="st-top-header">
        <div class="container">
            <div class="st-top-header-in">
            <ul class="st-top-header-list">
                <li><i class="fas fa-envelope"></i>Email: <a href="#">kunach1lo@gmail.com</a></li>
                <li><i class="fas fa-phone-volume"></i>Contact: <a href="#">+7(999)-999-9999 </a></li>
                <!-- <li><i class="fas fa-clock"></i>Work time: <a href="#">9:00AM - 18:00PM</a></li> -->
            </ul>
            </div>
        </div>
        </div>
        <div class="st-main-header">
        <div class="container">
            <div class="st-main-header-in">
            <div class="st-main-header-left">
                <a class="st-site-branding st-white-logo" href="/"><b>Prozect Zero</b></a>
                <a class="st-site-branding st-dark-logo" href="/"><b>Prozect Zero</b></a>
            </div>
            <div class="st-main-header-right">
                <div class="st-nav">
                <ul class="st-nav-list st-onepage-nav">
                    <li class="menu-item-has-children"><a href="#home" class="st-smooth-move"></a></li>
                    <!-- <li><a href="/posts" class="st-smooth-move">Посты</a></li> -->
                    <li><a href="/about" class="st-smooth-move">Обо мне</a></li>
                    <li><a href="/contacts" class="st-smooth-move">Обратная связь</a></li>
                    <!-- <li><a href="/account/login" class="st-smooth-move">Логин</a></li> -->
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>
    <!-- End Header Section -->

    <?php echo $content; ?>



  <!-- Start Video Popup -->
  <div class="st-video-popup">
    <div class="st-video-popup-overlay"></div>
    <div class="st-video-popup-content">
      <div class="st-video-popup-layer"></div>
      <div class="st-video-popup-container">
        <div class="st-video-popup-align">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="about:blank"></iframe>
          </div>
        </div>
        <div class="st-video-popup-close"></div>
      </div>
    </div>
  </div>
  <!-- End Video Popup -->

    <!-- Scripts -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/form.js"></script>
    <script src="/public/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/public/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/public/js/isotope.pkg.min.js"></script>
    <script src="/public/js/jquery.slick.min.js"></script>
    <script src="/public/js/mailchimp.min.js"></script>
    <script src="/public/js/counter.min.js"></script>
    <script src="/public/js/lightgallery.min.js"></script>
    <script src="/public/js/wow.min.js"></script>
    <script src="/public/js/textRotate.min.js"></script>
    <script src="/public/js/main.js"></script>
</body>
</html>