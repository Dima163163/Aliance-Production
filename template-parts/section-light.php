<section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">схема работы</h2>
        <!-- Основной блок слайдера -->
        <div class="swiper steps-slider">
          <!-- Обертка слайдера -->
          <ol class="swiper-wrapper <?= $steps_style; ?>">
            <!-- Слайды -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="text steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="#" class="button-link" data-toggle="modal" data-target="#feedback-modal">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="text steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="text steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="text steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации разума над эмоциями.
              </p>
            </li>
          </ol>
          <!-- Кнопки навигации вперед/назад -->
          <div class="steps-buttons primary-buttons-wrapper">
            <div class="steps-button-prev primary-button-prev">
              <svg  class="<?= $button_arrow; ?>" width="30" height="20">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg class="<?= $button_arrow; ?>" width="30" height="20">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>