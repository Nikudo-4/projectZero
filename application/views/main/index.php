  <div class="st-content">
    <div class="st-height-b120 st-height-lg-b80"></div>
    <!-- Start Hero Seciton -->
    <div class="st-slider st-style1 st-slider-animation1">
      <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1">
        <div class="slick-wrapper">
          <div class="slick-slide-in">
            <div class="st-hero st-style1 st-size1 st-hero-overlay st-white">
              <div class="st-hero-bg st-dynamic-bg st-bg" data-src="/public/img/pexels-andrew-neel-2312369.jpg"></div>
              <div class="container">
                <div class="st-hero-text">
                  <h1 class="st-hero-title">
                    We are best creative <br>
                    Business Agency
                  </h1>
                  <div class="st-hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="st-hero-btn-group">
                    <a href="#" class="st-btn st-style1 st-size-medium st-color1">Learn More</a>
                    <a href="#" class="st-btn st-style1 st-size-medium st-color3">About Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slick-slide-in">
            <div class="st-hero st-style1 st-size1 st-hero-overlay st-white">
              <div class="st-hero-bg st-dynamic-bg st-bg" data-src="/public/img/pexels-marc-mueller-380769.jpg"></div>
              <div class="container">
                <div class="st-hero-text">
                  <h1 class="st-hero-title">
                    We are best creative <br>
                    Business Agency
                  </h1>
                  <div class="st-hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="st-hero-btn-group">
                    <a href="#" class="st-btn st-style1 st-size-medium st-color1">Learn More</a>
                    <a href="#" class="st-btn st-style1 st-size-medium st-color3">About Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slick-slide-in">
            <div class="st-hero st-style1 st-size1 st-hero-overlay st-white">
              <div class="st-hero-bg st-dynamic-bg st-bg" data-src="/public/img/pexels-burst-373892.jpg"></div>
              <div class="container">
                <div class="st-hero-text">
                  <h1 class="st-hero-title">
                    We are best creative <br>
                    Business Agency
                  </h1>
                  <div class="st-hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="st-hero-btn-group">
                    <a href="#" class="st-btn st-style1 st-size-medium st-color1">Learn More</a>
                    <a href="#" class="st-btn st-style1 st-size-medium st-color3">About Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- .slick-container -->
      <div class="pagination st-style2 st-hidden"></div> <!-- If dont need Pagination then add class .st-hidden -->
      <div class="swipe-arrow st-style2"> <!-- If dont need navigation then add class .st-hidden -->
        <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
        <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
      </div>
    </div><!-- .st-slider -->
    <!-- End Hero Seciton -->

    <hr>

    <!-- Start Blog Section -->
    <section class="st-gray-bg" id="blog">
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
        <?php //debug($list) ?>
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">Latest News</h2>
          <div class="st-section-heading-seperator left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          <div class="st-section-heading-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>sed do eiusmod tempor incididunt.</div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="st-slider st-style2 st-pricing-wrap">
          <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"  data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
            <div class="slick-wrapper">
              <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
                <?php else: ?>
                <?php foreach($list as $val): ?>
              <div class="slick-slide-in">
                <div class="st-post st-style2 st-zoom">
                  <a href="/post/<?php echo $val['id']; ?>" class="st-post-thumb">
                    <img class="st-zoom-in" src="https://via.placeholder.com/370x210" alt="blog1">
                  </a>
                  <div class="st-post-info">
                    <h2 class="st-post-title"><a href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'],ENT_QUOTES); ?></a></h2>
                    <div class="st-post-text"><?php echo htmlspecialchars($val['description'],ENT_QUOTES); ?></div>
                  </div>
                  <div class="st-post-footer">
                    <div class="st-post-date">Индентификатор <?php echo $val['id']; ?></div>
                    <a href="/post/<?php echo $val['id']; ?>" class="st-post-btn">Перейти к новости</a>
                  </div>
                </div>
              </div><!-- .slick-slide-in -->
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div><!-- .slick-container -->
          <div class="pagination st-style1 st-flex st-hidden"></div> <!-- If dont need Pagination then add class .st-hidden -->
          <div class="swipe-arrow st-style1"> <!-- If dont need navigation then add class .st-hidden -->
            <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
            <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
          </div>
        </div><!-- .st-slider -->
      </div>
      <div class="container">
        <div class="pagination">
          <div><?php echo $pagination ?></div>
        </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
    <!-- End Blog Section -->

    <div class="st-google-map">
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe> -->
    </div>
    <footer class="st-site-footer st-sticky-footer">
    <!-- <div class="st-main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <div class="st-text-field">
                <a class="st-site-branding st-white-logo" href="/"><b>Prozect Zero</b></a>
                <a class="st-site-branding st-dark-logo" href="/"><b>Prozect Zero</b></a>

              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <h2 class="st-footer-widget-title1"><a href="#portfolio" class="st-smooth-move">Посты</a></h2>

            </div>
          </div>
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <h2 class="st-footer-widget-title1"><a href="#about" class="st-smooth-move">Обо мне</a></h2>

            </div>
          </div>
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <h2 class="st-footer-widget-title1"><a href="#services" class="st-smooth-move">Обратная связь</a></h2>

            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="st-copyright-wrap">
      <div class="container">
        <div class="st-copyright-in">
          <div class="st-left-copyright">
            <div class="st-copyright-text">Copyright  2022. By Nickudo</div>
          </div>
          <div class="st-right-copyright">
            <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  </div>
