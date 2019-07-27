<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class='container_include_about_brands'>
    <?php $url = base_url() . 'assets/images/site/brands/officeart/'; ?>

    <img
        src='<?= $url; ?>zoeftig_logo.jpg'
        style='
            position: absolute;
            top: 50px;
            left: 405px;
            width: 250px;
            z-index: 3;
        '
    />

    <img
        src='<?= $url; ?>zoeftig_1.jpg'
        style='
            position: absolute;
            top: 130px;
            left: 100px;
            width: 320px;
            z-index: 2;
        '
    />

    <img
        src='<?= $url; ?>zoeftig_2.jpg'
        style='
            position: absolute;
            top: 150px;
            right: 10px;
            width: 325px;
            z-index: 2;
        '
    />
</div>