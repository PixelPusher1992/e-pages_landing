<?php
require 'lib.php';
require 'constants.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta HTTP-EQUIV="Refresh" сontent="3" URL="pages/main.php">
    <link href="<?=SITE_DIR?>favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH.'/css/bundle.min.css'?>"/>
</head>
<body>
<?php include 'old-browser-warning.php'; ?>


<?
require_once($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/img/svg/icons.svg');
?>

<header class="header">
    <div class="container">
        <div class="header__logo">
            <a href="#">
                <img src="<?=SITE_TEMPLATE_PATH.'/img/svg/logo-e.svg'?>" alt="" class="img-responsive">
            </a>
        </div>
        <div class="header__main-text text__main text-uppercase text-center">
            Поддержка интернет-магазинов
        </div>
        <?php includeComponent('form') ?>
        <div class="header__desc-text text__main text-justify">
            Услуга комплексной поддержки интернет-магазинов для компаний которые продают оптом или в розницу
            через интернет. Увеличение конверсии, рост трафика, аналитика и план развития.

        </div>
        <a class="js_anchor header__scroll-button center-block text-center" href="#down">
            <svg class="arrow">
                <use xlink:href="#arrow"></use>
            </svg>
        </a>
    </div>
</header>





    
    
    
    
    
    
    