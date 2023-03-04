<?php
$page_title = 'О компании';
$header_style = 'page-header-bg-grey';
include_once('./template-parts/header-page.php');?>
<?php 
$slider_button_style = 'slider-button-grey'; 
include_once('./template-parts/section-annotation.php');?>
<?php include_once('./template-parts/section-manufacture.php');?>
<?php
$founder_foto='founder-photo-about';
$founder_button_text="О нашей миссии";
$founder_button_style='button-link-about';
include_once('./template-parts/founder.php');?>
<?php
$button_arrow = "button-arrow"; 
$research_style = 'section-research';
include_once('./template-parts/section-research.php');?>
<?php include_once('./template-parts/clients.php');?>
<?php include_once('./template-parts/footer.php');?>
