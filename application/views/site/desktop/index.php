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

    <meta name='description' content='atwork is an integrated, innovative, and smart solution that creates a dynamic activity based environment. We are a solution provider that facilitates the transformation with the products of officeart for working place with integrated system furniture, @twork in digital products such as Information Communication Technology Products, LCD / LED Displays and Mutimedia Products.

    In addition, we also provides work-life improvement products such as Monitor Arms & Mobility Displays, and Electrical Hub Modules.' />
	<meta name='robots' content='index, follow' />

    <?php $this->view('common/header'); ?>
    <?php $this->view('site/desktop/common/header_desktop'); ?>

    <!-- CSS -->
    <link rel='stylesheet' type='text/css' href='<?= base_url(); ?>assets/css/homepage.css?v=0.06' />
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
        <!-- Homepage Top -->
        <div
            style="
                display:flex;
                flex-direction:row;
                height: 700px;
            "
            id="home"
        >
            <!-- Heading words -->
            <div
                style="
                    display:flex;
                    flex: 1;
                "
            >
                <div
                    style="
                        position:absolute;
                        margin: 105px 0 0 69px;
                        font-weight:bold;
                        font-size:80px;
                        line-height: 90px;
                        color:#EF424C
                    "
                >
                    Smart solutions
                    <br>
                    to support your
                    <br>
                    business
                </div>
                <div
                    style="
                        margin: 400px 0 0 69px;
                        font-size:14px;
                    "
                >
                    <a href="readmore"
                        style="
                            text-decoration:none;
                            color: #686767;
                        "
                    >Read more</a>
                </div>
            </div>
            <!-- Heading img -->
            <div>
                <img 
                    src='<?= base_url(); ?>assets/images/site/home_1.jpg'
                    style='
                        width: 940px;
                        margin: 30px 0px 0px 0px
                    '
                />
            </div>
        </div>
        <!-- Hot Item -->
        <div class="carousell_container">
            <!-- Image -->
            <div>
                <?php
                    $array_img = array(
                        'home_1',
                        //'office_1',
                        //'office_2',
                    );

                    for($a = 0; $a < count($array_img); $a++):
                ?>
                    <img 
                        src='<?= base_url(); ?>assets/images/site/<?= $array_img[$a]; ?>.jpg'
                        style='
                            width:100%;
                            margin: 0px 0px 0px 0px;
                        '
                    />
                <?php endfor; ?>
            </div>
        </div>
        <!-- About -->
        <div
            style="
                height: 800px;
                display:flex;
                flex-direction: row;
                align-items:center
            "
            id="about"
        >
            <!-- Image -->
            <div
                style="
                    padding: 0 0 0 50px
                "
            >
                <img 
                    src='<?= base_url(); ?>assets/images/site/about.jpg?v=0.01'
                    style='
                        width:550px;
                        margin: 0px 0px 0px 0px
                    '
                />
            </div>
            <!-- About Text -->
            <div
                style="
                    padding: 0 100px;
                "
            >
                <div
                    style="
                        color:#EF424C;
                        font-size:50px
                    "
                >
                    About
                </div>
                <div
                    style="
                        font-size:18px;
                        line-height: 36px;
                        color: #454545;
                    "
                >
                    <!--Atwork is the leading of the end to end office solutions from
                    <br>
                    furniture to digital products in Indonesia. Providing clients
                    <br>
                    with high-end furniture, ICT products, LED/LCD products,
                    <br>
                    Multimedia products, work & life improvement. Atwork strive
                    <br>
                    to be the best in improving working lifestyle to
                    <br>
                    boost creativity, productivity and efficiency.-->

                    atwork is an integrated, innovative, and smart solution that creates a dynamic activity based environment.
                    <br />
                    <br />
                    We are a solution provider that facilitates the transformation with the products of officeart for working place with integrated system furniture, @twork in digital products such as Information Communication Technology Products, LCD / LED Displays and Mutimedia Products.
                    <br />
                    <br />
                    In addition, we also provides work-life improvement products such as Monitor Arms & Mobility Displays, and Electrical Hub Modules.
                </div>
            </div>
        </div>
        <!-- Product Catagories -->
        <div
            style="
                height: 550px
            "
        >
            <!-- Title -->
            <div
                style="
                    font-size:40px;
                    color: #EF424C;
                    text-align:center;
                    font-weight:bold;
                    margin: 0 0 50px 0
                "
                id="officeart"
            >
                Product Categories
            </div>
            <!-- Products -->
            <div
                style="
                    padding: 50px 80px
                "
            >
                <!-- Product 1 -->
                <div
                    class="product_1"
                    style="
                        display:flex;
                    "
                >
                    <?php 
                        $array_img = array(
                            'product_1',
                            'product_2',
                            'product_3'
                        );
                        $array_txt = array('Office Furniture', 'ICT, LED/LCD, and Multimedia', 'Life and Work Improvement');
                        $array_href = array('furniture', 'ict', 'support');

                    for($d = 0; $d < count($array_img); $d++):
                    ?>
                        <a
                            style="
                                text-decoration:none;
                                display:inline-block;
                                padding: 0 50px;
                                text-align:center
                            "
                            href="<?= $array_href[$d]; ?>"
                        >
                            <img 
                                src='<?= base_url(); ?>assets/images/site/<?= $array_img[$d]; ?>.jpg'
                                style='
                                    width: 300px;
                                    margin: 0px 0px 0px 0px
                                '
                            />
                            <div
                                style="
                                    padding: 20px 0 0 0;
                                    color: #454545;
                                "
                            >
                                <?= $array_txt[$d]; ?>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!-- Blogs -->
        <div
            style="
                height: 550px
            "
            id="officeart"
        >
            <!-- Title -->
            <div
                style="
                    font-size:40px;
                    color: #EF424C;
                    text-align:center;
                    font-weight:bold;
                    margin: 0 0 50px 0
                "
            >
                Blogs
            </div>
            <!-- Article -->
            <div
                style="
                    padding: 50px 80px
                "
                id="blogs"
            >
                <!-- Product 1 -->
                <div
                    class="product_1"
                    style="
                        display:flex;
                    "
                >
                    <?php 
                        $array_img = array(
                            'product_1',
                            'product_2',
                            'product_3'
                        );
                        $array_txt = array('Office Furniture', 'ICT, LED/LCD, and Multimedia', 'Life and Work Improvement');
                        $array_href = array('furniture', 'ict', 'support');

                    for($d = 0; $d < count($array_img); $d++):
                    ?>
                        <a
                            style="
                                text-decoration:none;
                                display:inline-block;
                                padding: 0 50px;
                                text-align:center
                            "
                            href="<?= $array_href[$d]; ?>"
                        >
                            <img 
                                src='<?= base_url(); ?>assets/images/site/<?= $array_img[$d]; ?>.jpg'
                                style='
                                    width: 300px;
                                    margin: 0px 0px 0px 0px
                                '
                            />
                            <div
                                style="
                                    padding: 20px 0 0 0;
                                    color: #454545;
                                "
                            >
                                <?= $array_txt[$d]; ?>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!-- Contact Us -->
        <div
            style="
                height: 550px;
                display:flex;
                flex-direction: row;
            "
        >
            <!-- Subscribe -->
            <div
                style="
                    padding: 150px 0 0 80px;
                    background:#EF424C;
                    height: 280px;
                    display:flex;
                    flex-direction:column;
                    flex:1;
                "
            >
                <div
                    style="
                        color:white;
                        font-size:50px
                    "
                >
                    Are your ready to
                    <br>
                    collaborate with us?
                </div>
                <!-- Subscribe -->
                <div
                    style="
                        display:flex;
                        flex-direction: row;
                        align-items:center;
                        margin: 10px 0 0 0
                    "
                >
                    <div
                        style="
                            display:inline-block
                        "
                    >
                        <input 
                            type="text"
                            name="email" 
                            placeholder="Enter your email address . . ."
                            autocomplete='off'
                            style="
                                padding: 11px;
                                width: 300px;
                                border-radius: 5px;
                                border:none
                            "
                        />
                    </div>
                    <!-- Button -->
                    <div 
                        style='
                            display:inline-block;
                            margin: 0 0 0 10px;
                        '
                    >
                        <input 
                            class="button"
                            value="Subscribe"
                            id='contactus_submit'
                            style="
                                background:#082D26;
                                border-radius: 5px;
                                padding: 11px 25px;
                                color:white;
                                cursor:pointer;
                                text-align:center;
                                width: 80px;
                                border:none;
                                font-size:14px;
                                font-family:montserrat
                            "
                        >
                    </div>
                </div>
            </div>
            <!-- Image -->
            <div>
                <img 
                    src='<?= base_url(); ?>assets/images/site/contact_us.jpg'
                    style='
                        width:460px;
                        margin: 0px 0px 0px 0px
                    '
                />
            </div>
        </div>

        <!-- Copyright -->
        <?php $this->view('site/desktop/common/bar_bot'); ?>
    </div>
    <script>
    var slideIndex = 1;
    carousell(slideIndex);
    
    function crousell_1(n) {
        show
    }
</body>

</html>