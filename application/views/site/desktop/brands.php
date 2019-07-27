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

    <title>Atwork - Future of Work</title>
    <?php $this->view('common/header'); ?>
    <?php $this->view('site/desktop/common/header_desktop'); ?>

    <!-- CSS -->
    <link rel='stylesheet' type='text/css' href='<?= base_url(); ?>assets/css/brands_desktop.css?v=0.08' />

    <!-- JS -->
    <script src='<?= base_url(); ?>assets/js/brands.js?v=0.11'></script>
</head>

<body
    class="overflow_8px"
>
    <div
        style="
            display:flex;
            flex-direction:column;
            flex:1;
            font-family: 'Montserrat', sans-serif;
        "
    >
        <!-- Header -->
        <?php $this->view('site/desktop/common/bar_top'); ?>

        <!-- About Intro -->
        <div
            style="
                min-height: 350px;
                width: 100%;
                text-align: center;
            "
        >
            <!--<div
                style="
                    color:#EF424C;
                    font-size:28px;
                    margin: 10px 0 0 0
                "
            >
                About Product
            </div>-->

            <div
                class="nama"
                style="
                    margin: 40px 0 0 0;
                    height: 400px;
                "
            ></div>
        </div>

        <!-- Brands List -->
        <div
            style="
                position:absolute;
                width: 180px;
                top: 145px;
                left: 80px;
                border-radius: 8px;
                padding: 2px;
                background: rgba(255, 255, 255, 0.35);
                display:flex;
                box-shadow: 1px 1px 4px 2px #cacaca;
            "
        >
            <div
                class='container_brand_scroll'
                style="
                    display:flex;
                    flex-direction:column;
                    flex: 1;
                    text-align:center;
                    max-height: 400px;
                    overflow: auto;
                "
            >
                <?php
                if($data['brand']):
                    for($a = 0; $a < count($data['brand']); $a++): ?>
                        <div
                            class="brands_list"
                            style="
                                display:flex;
                                flex:1;
                                text-align:center;
                                justify-content:center;
                                padding: 0px 30px;
                                cursor:pointer
                            "
                            data-brand='<?= strtolower($data['brand'][$a]['product_brand_name']); ?>'
                            data-category='<?= $category; ?>'
                            data-pid='<?= encrypt2($data['brand'][$a]['product_brand_pid']); ?>'
                        >
                            <div
                                style='
                                    padding: 16px 0;
                                    flex: 1;
                                    <?= $a != count($data['brand'])-1 ?'border-bottom: 1px solid #cacaca;' : ''; ?>
                                '
                            >
                                <?= $data['brand'][$a]['product_brand_name']; ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Product List -->
        <div
            style="
                background:#EF424C;
                height: 550px;
                widht:100%;
                text-align:center;
            "
        >
            <div
                style=" 
                    color:white;
                    font-size:28px;
                    margin: 40px 0 0 0;
                    padding: 0 0 50px 0;
                "
            >     
                List of Products
            </div>

            <div
                style='
                    background: #f2f2f2;
                    height: 500px;
                    position: relative;
                '
            >
                <div
                    style='
                        position: absolute;
                        width: 100%;
                        z-index: 5;
                    '
                >
                    <div
                        style='
                            background: white;
                            width: 1000px;
                            border-radius: 10px;
                            margin: 0 auto;
                            padding: 15px 0;
                            margin-top: -30px;
                        '
                    >
                        <form id='form_query_product'>
                            <input type='hidden' name='segment' value='<?= $category; ?>' />
                            
                            <div class='col'>
                                <input 
                                    type='text'
                                    placeholder='Cari Produk'
                                    name='q'
                                    style='
                                        padding: 5px 10px;
                                        border-radius: 5px;
                                        border: 1px solid #e0e0e0;
                                    '
                                    autocomplete='off'
                                />
                            </div>

                            <div class='col'>
                                <select
                                    class='select_brand'
                                    name='brand'
                                    style='
                                        padding: 5px 10px;
                                        border-radius: 5px;
                                        border: 1px solid #e0e0e0;
                                    '
                                >
                                    <option value=''>Pilih Brand</option>
                                    <?php foreach($data['brand'] as $b): ?>
                                        <option value='<?= encrypt2($b['product_brand_pid']); ?>'>
                                            <?= $b['product_brand_name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class='col'>
                                <div 
                                    class='col btn_orange btn_search_product'
                                    style='
                                        padding: 5px 10px;
                                        font-size: 12px;
                                    '
                                >
                                    Search
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div
                    class='container_load_product'
                    style='
                        padding: 50px 0 0 0;
                        position: relative;
                        min-height: 500px;
                    '
                >
                    <?php $this->view('common/loader1'); ?>

                    <div
                        class='container_load_product_content'
                        style='font-size: 20px;'
                    ></div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <?php $this->view('site/desktop/common/bar_bot'); ?>
    </div>

    <?php $this->view('common/loader_bar'); ?>
</body>

</html>