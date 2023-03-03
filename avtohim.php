<?php
$page_title = 'Автомобильная химия';
$header_style = 'page-header-bg-grey-img';
$block_image = '<div class="page-header-img>
	<picture>
    <source type="image/webp" srcset="./img/avto-him-header.webp">
    <source type="image/png" srcset="./img/avto-him-header.png">
    <img src="./img/avto-him-header.png" alt="founder" class="page-header-image" width="480" height="240">
    </picture>
</div>';
include_once('./template-parts/header-page.php');?>
<?php include_once('./template-parts/section-contract.php');?>
<?php include_once('./template-parts/section-making.php');?>
<?php include_once('./template-parts/section-types.php');?>
<?php
$button_arrow = "button-arrow"; 
include_once('./template-parts/section-research.php');?>
<?php
$button_arrow = 'button-arrow';
include_once('./template-parts/section-light.php');?>
<?php include_once('./template-parts/clients.php');?>
<?php include_once('./template-parts/footer.php');?>