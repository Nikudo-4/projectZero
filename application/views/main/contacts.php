    <!-- Start Contact Section -->
    <section id="contact .st-night-mode">
      <div class=" st-height-lg-b80 "></div>
      <div class="pt-120 container">
        <div class=" st-section-heading st-style1 ">
          <h2 class="st-section-heading-title">Обратная связь</h2>
          <div class="st-section-heading-seperator left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
        </div>
        <div class="st-height-b50 st-height-lg-b50"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div id="st-alert"></div>
            <form action="/contacts" class="row st-contact-form" method="post"  >
              <div class="col-lg-6">
                <div class="st-form-field">      
                  <input type="text" id="name" name="name" required>
                  <label>Имя</label>
                </div>
              </div><!-- .col -->
              <div class="col-lg-6">
                <div class="st-form-field">      
                  <input type="text" id="email" name="email" required>
                  <label>Емайл</label>
                </div>
              </div><!-- .col -->
              <div class="col-lg-6">
                <div class="st-form-field">      
                  <input type="text" id="subject" name="subject" required>
                  <label>Тема</label>
                </div>
              </div><!-- .col -->
              <div class="col-lg-6">
                <div class="st-form-field">      
                  <input type="text" id="phone" name="phone" required>
                  <label>Телефон</label>
                </div>
              </div><!-- .col -->
              <div class="col-lg-12">
                <div class="st-form-field">      
                  <textarea cols="30" rows="10" id="msg" name="msg" required></textarea>
                  <label>Сообщение</label>
                </div>
              </div><!-- .col -->
              <div class="col-lg-12">
                <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="submit" name="submit">Отправить</button>
                <div class="empty-space col-lg-b30"></div>
              </div><!-- .col -->
            </form>
            <div class="st-height-b30 st-height-lg-b30"></div>
          </div>
        </div>
      </div>
      <div class="st-height-b90 st-height-lg-b50"></div>
    </section>
    <!-- End Contact Section -->