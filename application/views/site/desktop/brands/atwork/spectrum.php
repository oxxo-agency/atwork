<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class='container_include_about_brands'>
<?php $url = base_url() . 'assets/images/site/brands/atwork/'; ?>
    <!-- Iklan di ruangan stasiun TV -->
    <img
        src='<?= $url;?>spectrum_1.png'
        style='
            position: absolute;
            top: 15px;
            left: 190px;
            width: 440px;
            z-index: -1;
        '
    />
    <!-- Iklan Dian sastro -->
    <img
        src='<?= $url;?>spectrum_4.png'
        style='
            position: absolute;
            top: 15px;
            left:620px;
            width: 430px;
            z-index: -1;
        '
    />
    <!-- Iklan bagi bangsa indo -->
    <img
        src='<?= $url;?>spectrum_3.png'
        style='
            position: absolute;
            top: 180px;
            left: 190px;
            width: 430px;
            z-index: -1;
            transform: scaleX(-1);
        '
    />
    <!-- Iklan malem2 LV -->
    <img
        src='<?= $url;?>spectrum_2.png'
        style='
            position: absolute;
            top: 110px;
            left: 650px;
            width: 400px;
            z-index: -1;
        '
    />
    <img
        src='<?= $url;?>spectrum_logo.png'
        style='
            position: absolute;
            top: 140px;
            left: 510px;
            width: 280px;
            z-index: 2;
        '
    />
</div>