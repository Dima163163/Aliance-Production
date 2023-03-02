<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script>/*! modernizr 3.6.0 (Custom Build) | MIT *
    * https://modernizr.com/download/?-webp-setclasses !*/
    !function(e,n,A){function o(e,n){return typeof e===n}function t(e){var n=r.className,A=Modernizr._config.classPrefix||"";if(l&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),l?r.className.baseVal=n:r.className=n)}function a(){var e,n,A,t,a,i,r;for(var l in f)if(f.hasOwnProperty(l)){if(e=[],n=f[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],r=i.split("."),1===r.length?Modernizr[r[0]]=t:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=t),s.push((t?"":"no-")+r.join("-"))}}function i(e,n){if("object"==typeof e)for(var A in e)c(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),a=Modernizr[o[0]];if(2==o.length&&(a=a[o[1]]),"undefined"!=typeof a)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),t([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=n.documentElement,l="svg"===r.nodeName.toLowerCase(),f=[],u={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){f.push({name:e,fn:n,options:A})},addAsyncTest:function(e){f.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=u,Modernizr=new Modernizr;var c;!function(){var e={}.hasOwnProperty;c=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),u._l={},u.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},u._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){u.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),a(),t(s),delete u.addTest,delete u.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);</script>
    <title> <?php echo date('Y')?> - Aliance Production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="./avtohim.php" class="mobile-submenu-link">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="./household-chemicals.php" class="mobile-submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="./desinfectians.php" class="mobile-submenu-link"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="./food-aerosols.php" class="mobile-submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="./cosmetic.php" class="mobile-submenu-link"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="./paints.php" class="mobile-submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./news.php" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contacts.php" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+79996861014" class="mobile-phone">+7 (999) 686-10-14</a>
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#map"></use>
        </svg>
        <address class="mobile-info-adress">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#email"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-info -->
      <div class="social-info">
        <a href="#" class="social-info-vk">
          <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <!-- /.vk-info -->
        <a href="#" class="social-info-instagram">
          <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#instagram"></use>
          </svg>
        </a>
        <!-- /.instagram-info -->
      </div>
    </div>
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-button">
          <div class="mobile-menu-line"></div>
          <div class="mobile-menu-line"></div>
          <div class="mobile-menu-line"></div>
        </div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link"
            >О компании</a
          >
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="./news.php" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="./contacts.php" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+79996861014" class="header-phone-link"
          >+7 (999) 686-10-14</a
        >
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">
            Комплексное обеспечение товарами <br> и расходными материалами бизнеса
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <div class="button header-button" data-toggle="modal" data-target="#feedback-modal">
            Подробнее о компании
          </div>
        </div>
        <!-- /.header-content -->
        <!-- Основной блок слайдера -->
        <?php 
        $features_style = 'header-features-text';
        $button_arrow = 'button-arrow';
        include_once('./template-parts/features.php');?>
      </div>
      <!-- /.container -->
    </header>
    <?php include_once('./template-parts/section-light.php');?>
    <?php $block_title = "контрактное производство"; include_once('./template-parts/section-production.php');?>
    <?php
    $block_title = "собственные торговые марки";
    include_once('./template-parts/section-trademark.php');?>
    <?php 
    $founder_foto='founder-photo';
    include_once('./template-parts/founder.php');?>
    <?php include_once('./template-parts/clients.php');?>
    <?php $blog_title = 'Блог экспертов в области производства'; include_once('./template-parts/section-blog.php');?>
    <?php include_once('./template-parts/footer.php');?>

