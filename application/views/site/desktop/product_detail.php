<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142568281-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-142568281-1');
    </script>

    <title><?= $data['product'] ? 'Jual ' . $data['product'][0]['product_name'] : 'Atwork - Future of Work'; ?></title>

    <meta name='description' content='<?= $data['product'] && $data['product'][0]['product_desc'] != '' ? substr(remove_break($data['product'][0]['product_desc']), 0, 250) : 'atwork is an integrated, innovative, and smart solution that creates a dynamic activity based environment. We are a solution provider that facilitates the transformation with the products of officeart for working place with integrated system furniture, @twork in digital products such as Information Communication Technology Products, LCD / LED Displays and Mutimedia Products.

    In addition, we also provides work-life improvement products such as Monitor Arms & Mobility Displays, and Electrical Hub Modules.'; ?>' />
	<meta name='robots' content='index, follow' />

    <?php $this->view('common/header'); ?>
    <?php $this->view('site/desktop/common/header_desktop'); ?>

    <!-- CSS -->
    <link rel='stylesheet' type='text/css' href='<?= base_url(); ?>assets/css/product_detail_desktop.css?v=0.08' />

    <!-- JS -->
    <script src='<?= base_url(); ?>assets/js/product_detail.js?v=0.10'></script>
</head>

<body
    class="overflow_8px"
>
    <?php $this->view('site/desktop/common/bar_top'); ?>

    <div>
        <?php if($data['product']): ?>
            <?php 
            $p = $data['product'][0];
            if($data['img']) {
                $img = $data['img'];
            } else {
                $img = '';
            }
            ?>

            <div class='container_front'>
                <div
                    class='container_tree_url'
                    style='
                        padding: 15px 0;
                        font: 13px arial;
                    '
                >
                    <a href='<?= base_url(); ?>'>
                        Home
                    </a>
                    /
                    <a href='<?= base_url() . 'brands/' . createUrl($p['product_segment_name']); ?>'>
                        <?= ucwords($p['product_segment_name']); ?>
                    </a>
                    /
                    <a href='<?= base_url() . 'brands/' . createUrl($p['product_segment_name']) . '/' . createUrl($p['product_brand_name']); ?>'>
                        <?= ucwords($p['product_brand_name']); ?>
                    </a>
                    /
                    <a href='<?= base_url() . 'brands/' . createUrl($p['product_segment_name']) . '/' . createUrl($p['product_brand_name']) . '/' . createUrl($p['product_category_name']); ?>'>
                        <?= ucwords($p['product_category_name']); ?>
                    </a>
                    /
                    <?= ucwords($p['product_name']); ?>
                </div>

                <div
                    style='
                        font-size: 0px;
                    '
                >
                    <?php 
                    $w_img = 365;
                    $w_img2 = 80;
                    ?>

                    <div 
                        class='col'
                        style='
                            width: <?= $w_img; ?>px;
                            height: <?= $w_img + $w_img2; ?>px;
                            background: red;
                        '
                    >
                        <div
                            style='
                                width: <?= $w_img; ?>px;
                                height: <?= $w_img; ?>px;
                                background: yellow;
                            '
                        >
                            <img
                                src='<?= $img != '' ? S3_URL . 'product_img/' . $p['product_pid'] . '/' . $img[0]['product_img'] : base_url() . 'assets/images/site/no-img.png'; ?>'
                                style='
                                    width:
                                '
                            />
                        </div>

                        <div
                            style='
                                height: <?= $w_img2-10; ?>px;
                                padding: 5px;
                                background: green;
                            '
                        >
                            <?php if($img != ''): ?>
                                <?php foreach($img as $im): ?>
                                    <div
                                        style='
                                            width: <?= $w_img2-10; ?>px;
                                            height: <?= $w_img2-10; ?>px;
                                            background: blue;
                                        '
                                    >
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div 
                        class='col'
                        style='
                            width: <?= 1150 - $w_img; ?>px;
                            padding: 15px 25px;
                        '
                    >
                        <div
                            style='
                                font-size: 15px;

                            '
                        >
                            <?= $p['product_name']; ?>
                        </div>
                    </div>
                </div>

                <div
                    class='font_montserrat_regular'
                    style='
                        padding: 15px;
                        font-size: 14px;
                        line-height: 20px;
                        color: #333333;
                    '
                >
                    <?= nl2br($p['product_desc']); ?>
                </div>
            </div>
        <?php else: ?>
            <div
                style='
                    padding: 50px 0;
                    text-align: center;
                    font: 14px arial;
                '
            >
                Produk tidak ditemukan.
            </div>
        <?php endif; ?>
    </div>

    <?php $this->view('site/desktop/common/bar_bot'); ?>
</body>
</html>