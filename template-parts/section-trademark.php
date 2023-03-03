<section class="section section-treademark">
      <div class="container">
        <?php 
        if (!empty($block_title)) {
          echo '<div class="seporator"></div>';
          echo '<h2 class="section-title section-treademark-title">'. $block_title .'</h2>';
        }
        ?>
        <h2 class="section-title section-treademark-title-mobil">собственные марки</h2>
        <div class="treademark-cards">
          <a href="./avtohim-agtech.php" class="treademark-card">
            <svg class="treademark-card-logo">
              <use href="img/sprite.svg#AGTECH"></use>
            </svg>
            <h3 class="treademark-card-title">Автохимия AG-Tech</h3>
            <p class="text treademark-card-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </a>
          <a href="./avtohim.php" class="treademark-card">
            <svg class="treademark-card-logo">
              <use href="img/sprite.svg#AP"></use>
            </svg>
            <h3 class="treademark-card-title">Автохимия AP</h3>
            <p class="text treademark-card-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </a>
        </div>
      </div>
    </section>
    <!-- /.section marks -->