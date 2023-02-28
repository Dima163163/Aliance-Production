<div class="swiper features-slider">
          <!-- Обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- Слайды -->
            <li class="swiper-slide header-features-item <?= $features_item; ?>">
              <svg width="36" height="36">
                <use href="img/sprite.svg#time"></use>
              </svg>
              <p class="text header-features-text <?= $features_style; ?>">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item <?= $features_item; ?>">
              <svg width="36" height="36">
                <use href="img/sprite.svg#cirtificate"></use>
              </svg>
              <p class="text header-features-text <?= $features_style; ?>">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item <?= $features_item; ?>">
              <svg width="36" height="36">
                <use href="img/sprite.svg#control"></use>
              </svg>
              <p class="text header-features-text <?= $features_style; ?>">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item <?= $features_item; ?>">
              <svg width="36" height="36">
                <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="text header-features-text <?= $features_style; ?>">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item <?= $features_item; ?>">
              <svg width="36" height="36">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <p class="text header-features-text <?= $features_style; ?>">Оперативное производство</p>
            </li>
          </ul>
          <!-- Кнопки навигации вперед/назад-->
          <div class="slider-buttons">
            <div class="slider-button-prev <?= $slider_button_style; ?>">
              <svg class="<?= $button_arrow; ?>" width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next <?= $slider_button_style; ?>">
              <svg class="<?= $button_arrow; ?>" width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>