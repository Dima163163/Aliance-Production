    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <a href="./" class="footer-logo">
            <svg class="logo-svg footer-logo">
              <use href="img/sprite.svg#logo"></use>
            </svg>
          </a>
          <a href="Tel:+79996861014" class="footer-phone">+7 (999) 686-10-14</a>
          <div class="footer-info">
            <svg class="adress-icon">
              <use href="img/sprite.svg#map"></use>
            </svg>
            <address class="footer-info-adress">
              г. Москва, Холодильный пер. 4к1с8
            </address>
          </div>
          <!-- /.footer-info -->
          <div class="footer-info footer-info-mail">
            <svg class="mail-icon">
              <use href="img/sprite.svg#email"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <!-- /.footer-info -->
          <div class="footer-social">
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon footer-social-icon-instagram">
                <use href="img/sprite.svg#instagram"></use>
              </svg>
            </a>
          </div>
        </div>
        <!-- /.footer-top -->
      </div>
      <hr class="footer-seporator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title-bottom">
              <a href="./contracts.php" class="footer-menu-title">Контрактное производство</a>
            </h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="./avtohim.php" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="./bithim.php" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="./desinfection.php" class="footer-menu-link"
                  >Дезинфицирующие средства</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="./aerosols.php" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="./cosmetics.php" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="./colors.php" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title-bottom">
              <a href="./trademarks.php" class="footer-menu-title">Собственные марки</a>
            </h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="./avtohim-agtech.php" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="./avtohim.php" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list footer-menu-list-bold">
              <li class="footer-menu-item">
                <a href="./about.php" class="footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="./news.php" class="footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="./contacts.php" class="footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
        <!-- /.footer-bottom -->
      </div>
      <!-- /.container -->
      <hr class="footer-seporator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="./privat-policy.php" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <!-- /.footer-legal -->
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg width="52" height="11">
              <use href="img/sprite.svg#ruso"></use>
            </svg>
          </div>
          <!-- /.footer-author -->
        </div>
        <!-- /.footer-wrapper -->
      </div>
    </footer>
    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                id="modal-user-name"
                type="text"
                class="input modal-input"
                name="username"
                placeholder=" "
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-user-name"
                >Имя</label
              >
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input
                id="modal-user-phone"
                type="tel"
                class="input modal-input phone-mask"
                name="userphone"
                placeholder=" "
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-user-phone"
                >Номер телефона</label
              >
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.input-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу,
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
          <!-- /.modal-form-footer -->
        </form>
      </div>
    </div>
    <div class="modal" id="alert-modal">
      <div class="modal-dialog">
          <svg class="modal-img">
              <use href="img/sprite.svg#success"></use>
            </svg>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <h2 class="modal-title modal-title-success">Спасибо за заявку!</h2>
        <p class="modal-text modal-text-success">
          Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <a href="./" class="button modal-button">
          Вернуться на главную
        </a>
      </div>
    </div>
		<script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>