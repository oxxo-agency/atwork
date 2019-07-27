<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Social Media and Others -->
<div
    style="
        min-height: 400px;
        display:flex;
        flex-direction:row;
        font-family: 'Montserrat', sans-serif;
        padding: 90px 0 0 0;
    "
    id="contactus"
>
    <div 
        class='container_front'
        style='
            font-size: 0px;
        '
    >
        <!-- Contact Us -->
        <div
            class='col'
            style='
                width: 450px;
            '
        >
            <div
                style='
                    padding: 0 10px;
                    line-height: 25px;
                    font-size: 14px;
                    color: #333333;
                '
            >
            
                <div
                    style="
                        color:#686767;
                        font-weight: bold;
                        font-size: 16px;
                        padding: 0 0 10px 0;
                    "
                >
                    Contact Us
                </div>

                Ruko Puri Sentra Niaga Blok T6 No. 39
                <br />
                Puri Indah, Kembangan
                <br />
                DKI Jakarta - 11610
                <br /><br />
                Senin - Jumat 08:00 - 17:00
                <br />
                Customer Service: (021) 2911 7407 | (021) 5830 4515
                <br />
                WhatsApp: 0816 851 643
                <br />
                Email: info@atwork.co.id
            </div>
        </div>
        <!-- !Contact Us -->

        <!-- User Links -->
        <div
            class='col'
            style="
                width: 200px;
                justify-content:center;
                font-size: 14px;
            "
        >
            <div
                style="
                    margin: 0px 0 0 0
                "
            >
                <div
                    style="
                        color:#686767;
                        font-weight: bold
                    "
                >
                    User Links
                </div>

                <div
                    style="
                        margin: 30px 0;
                        color:#686767;
                    "
                >
                    <?php 
                    $arr_nav_txt = array('About', 'Products', 'Blogs', 'Contact Us', 'Site Map'); 
                    $arr_nav_url = array('#about', 'products', '#blogs','#contactus', 'site-map');

                    for($n = 0; $n < count($arr_nav_txt); $n++): 
                    ?>
                        <div
                            style='
                                padding: 0 0 19px 0;
                            '
                        >
                            <a 
                                href='<?= base_url() . $arr_nav_url[$n]; ?>'
                                style='
                                    text-decoration: none;
                                    color:#686767;
                                '
                            >
                                <?= $arr_nav_txt[$n]; ?>
                            </a>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <!-- Products -->
        <div
            class='col'
            style="
                width: 200px;
                justify-content:center;
                font-size: 14px;
            "
        >
            <div
                style="
                    margin: 0px 0 0 0
                "
            >
                <div
                    style="
                        color:#686767;
                        font-weight: bold
                    "
                >
                Products
                </div>
                <div
                    style="
                        margin: 30px 0;
                        color:#686767;
                    "
                >
                    ICT Products
                    <br><br>
                    LED/LCD Products
                    <br><br>
                    Furniture
                    <br><br>
                    Multimedia Solutions
                    <br><br>
                    Life and Work Improvement
                </div>
            </div>
        </div>
        
        <!-- Socmed -->
        <div
            class='col'
            style="
                width: 350px;
                justify-content: center;
                font-size: 14px;
            "
        >
            <div
                style="
                    margin: 0px 0 0 0px;
                "
            >
                <div
                    style="
                        color:#EF424C;
                        text-align:center;
                        font-weight:bold
                    "
                >
                    Atwork
                </div>

                <div
                    class='container_icon_socmed'
                    style="
                        margin: 30px 0;
                        text-align: center;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        height: 55px;
                    "
                >
                    <div class='container_icon_socmed_col'>
                        <a href="https://www.instagram.com/atwork.id/">
                            <img 
                                src='<?= base_url(); ?>assets/images/site/icon_instagram.png'
                                style='
                                '
                            />
                        </a>
                    </div>

                    <div class='container_icon_socmed_col'>
                        <a href="https://www.facebook.com/Atwork-388496745107136/?eid=ARCDvveSm50u0V3N-bLg2JQdPJeWzykYcc-63s79hdQ4SbsatAFNF-Sm51USdwsbglREX2M27FhTryRe">
                            <img 
                                src='<?= base_url(); ?>assets/images/site/icon_facebook.png'
                                style='
                                '
                            />
                        </a>
                    </div>
                    
                    <div class='container_icon_socmed_col'>
                        <a href="https://www.linkedin.com/company/atwork-solution/?viewAsMember=true">
                            <img 
                                src='<?= base_url(); ?>assets/images/site/icon_linkedin.png'
                                style='
                                '
                            />
                        </a>
                    </div>

                    <div class='container_icon_socmed_col'>
                        <a href="https://www.youtube.com/channel/UCplrNljwJVppUJgTwllhbNA?view_as=subscriber">
                            <img 
                                src='<?= base_url(); ?>assets/images/site/icon_youtube.png'
                                style='
                                '
                            />
                        </a>
                    </div>
                </div>

                <!-- Ecommerce -->
                <div
                    style='
                        text-align: center;
                        font-size: 14px;
                        font-weight: bold;
                        color: #666666;
                    '
                >
                    Find Us At
                </div>

                <div
                    style='
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    '
                >
                    <?php 
                    $ecom_img = array('logo_bizzy.png', 'logo_jd.jpg');
                    $ecom_url = array('https://www.bizzy.co.id/seller/catalog/products/228770/detail', 'https://www.jd.id/shop/OfficeArt_43213.html');

                    for($e = 0; $e < count($ecom_img); $e++):
                    ?>
                        <a
                            href='<?= $ecom_url[$e]; ?>'
                        >
                            <div 
                                class='col'
                                style='
                                    padding: 0 10px;
                                '
                            >
                                <img 
                                    style='
                                        width: 100px;
                                    '
                                    src='<?= base_url(); ?>assets/images/site/<?= $ecom_img[$e]; ?>'
                                />
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>
                <!-- !Ecommerce -->
            </div>
        </div>
        <!-- !Socmed -->

        <!-- Newsletter
        <div
            style="
                display:flex;
                flex:0.35;
            "
        >
            <div
                style="
                    margin: 90px 0 0 40px
                "
            >
                <div
                    style="
                        color:#686767;
                        font-weight: bold
                    "
                >
                    Our Newsletter
                </div>

                <div
                    style="
                        margin: 30px 0;
                        color:#686767;
                    "
                >
                    Subscribe our Newsletter
                </div>
            </div>
        </div>-->
    </div>
</div>

<!-- Copyright -->
<div
    style="
        background:#EF424C;
        height: 110px;
        display:flex;
        align-items:center;
        color:white;
        padding: 0 0 0 80px;
        font-size: 13px;
        line-height: 24px;
        font-family: 'Montserrat', sans-serif;
    "
>
    Copyright 2019 &copy AtWork
</div>