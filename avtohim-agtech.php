<?php
$title_head = 'Автохимия AG-tech';
$page_title = 'Автохимия AG-tech';
$header_style = 'page-header-agtech-img';
$block_image = '<img class="page-header-image" src="./img/avto-him-header.png" alt="">';
include_once('./template-parts/header-page.php');?>
<?php include_once('./template-parts/section-ag-manufacture.php');?>
<?php include_once('./template-parts/section-distributor.php');?>
<?php
$button_arrow = "button-arrow"; 
$research_style = 'section-research';
include_once('./template-parts/section-research.php');?>
<?php
$button_arrow = 'button-arrow';
$steps_style = 'steps';
include_once('./template-parts/section-light.php');?>
<?php include_once('./template-parts/clients.php');?>
<?php include_once('./template-parts/section-cta.php');?>
<?php include_once('./template-parts/footer.php');?>