    <div class="container">
      <div class="row">
        <div class="col-lg-8">
              <h2 class="comment-reply-title"><?php echo $title; ?></h2>
              <form method="post" class="comment-form" action="/admin/add">
                <p class="comment-form-url">
                    <label>Название</label>
                  <input name="name" type="text"  >
                </p>
                <p class="comment-form-url">
                    <label>Описание</label>
                  <input name="description" type="text" >
                </p>
                <p class="comment-form-comment">
                    <label>Текст</label>
                    <textarea name="text" cols="40" rows="5" ></textarea>
                </p>
                <p class="comment-form-url">
                    <label>Изображение</label>
                  <input name="img" type="file">
                </p>
                <p class="form-submit">
                  <button type="submit" class="st-btn st-style1 st-color1 st-size-medium">Создать пост</button>
                </p>
              </form>
        </div>
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </div>



