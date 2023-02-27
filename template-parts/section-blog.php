<section class="section section-blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title blog-section-title">
          <?php echo $blog_title?>
        </h2>
        <!-- Slider main container -->
        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="./blog-more.php" class="swiper-slide blog-card">
              <picture class="blog-card-image">
                <source type="image/webp" srcset="img/blog/blog-photo.webp">
                <source type="image/jpg" srcset="img/blog/blog-photo.jpg">
                <img src="img/blog/blog-photo.jpg" alt="blog">
              </picture>
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <picture class="blog-card-image">
                <source type="image/webp" srcset="img/blog/blog-post.webp">
                <source type="image/jpg" srcset="img/blog/blog-post.jpg">
                <img src="img/blog/blog-post.jpg" alt="blog">
              </picture>
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="./blog-more.php" class="swiper-slide blog-card">
              <picture class="blog-card-image">
                <source type="image/webp" srcset="img/blog/blog-photo.webp">
                <source type="image/jpg" srcset="img/blog/blog-photo.jpg">
                <img src="img/blog/blog-photo.jpg" alt="blog">
              </picture>
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>
          <div class="blog-slider-footer">
            <a href="./blog.php" class="button-link">Весь блог</a>
            <!-- Кнопки навигации вперед/назад -->
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg class="<?= $button_arrow; ?>" width="30" height="20">
                  <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg class="<?= $button_arrow; ?>" width="30" height="20">
                  <use href="img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>