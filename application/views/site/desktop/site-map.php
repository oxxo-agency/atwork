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
    <link rel='stylesheet' type='text/css' href='<?= base_url(); ?>assets/css/brands_desktop.css?v=0.07' />
    <!-- JS -->

    <style>
        .site_map_anchor {
            text-decoration: none;
        }

        .site_map_anchor:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="overflow_8px">
    <!-- Bar Top -->
    <?php $this->view('site/desktop/common/bar_top'); ?>

    <!-- Site Map -->
    <div
        style='
            text-align: center;
            background: #f2f2f2;
            padding: 100px 0;
        '
    >
        <?php
        $arr_nav = array(
            array(
                'category' => '',
                'content' => array(
                    array(
                        'h1' => 'Home',
                        'url' => ''
                    ),
                    array(
                        'h1' => 'About Us',
                        'url' => '#about'
                    ),
                    array(
                        'h1' => 'Contact Us',
                        'url' => '#contactus'
                    ),
                    array(
                        'h1' => 'News',
                        'url' => ''
                    ),
                    array(
                        'h1' => 'Blogs',
                        'url' => ''
                    )
                )
            ),
            array(
                'category' => 'Products',
                'content' => array(
                    array(
                        'h1' => 'officeart',
                        'url' => '',
                        'h2' => array(
                            array(
                                'col' => 'Avarte',
                                'url' => 'brands/officeart/avarte',
                            ),
                            array(
                                'col' => 'Inno',
                                'url' => 'brands/officeart/inno',
                            ),
                            array(
                                'col' => 'Vondom',
                                'url' => 'brands/officeart/vondom',
                            ),
                            array(
                                'col' => 'Flototto',
                                'url' => 'brands/officeart/flototto',
                            ),
                            array(
                                'col' => 'Heischool',
                                'url' => 'brands/officeart/heischool',
                            ),
                            array(
                                'col' => 'Sellex',
                                'url' => 'brands/officeart/sellex',
                            ),
                            array(
                                'col' => 'Uchida',
                                'url' => 'brands/officeart/uchida'
                            ),
                            array(
                                'col' => 'Figueras',
                                'url' => 'brands/officeart/figueras'
                            ),
                            array(
                                'col' => 'Zoeftig',
                                'url' => 'brands/officeart/zoeftig'
                            ),
                            array(
                                'col' => 'Asis',
                                'url' => 'brands/officeart/asis'
                            ),
                            array(
                                'col' => 'Atwork',
                                'url' => 'brands/officeart/atwork'
                            ),
                            array(
                                'col' => 'Motostuhl',
                                'url' => 'brands/officeart/motostuhl',
                            ),
                            array(
                                'col' => 'Maratti',
                                'url' => 'brands/officeart/maratti'
                            ),
                            array(
                                'col' => 'Leadex',
                                'url' => 'brands/officeart/leadex'
                            ),
                            array(
                                'col' => 'Girsberger',
                                'url' => 'brands/officeart/girsberger'
                            )
                        )
                    ),
                    array(
                        'h1' => '@twork',
                        'url' => '',
                        'h2' => array(
                            array(
                                'col' => 'ICT Products',
                                'url' => 'brands/atwork/ict'
                            ),
                            array(
                                'col' => 'LCD / LED',
                                'url' => 'brands/atwork/lcd-led',
                            ),
                            array(
                                'col' => 'Multimedia',
                                'url' => 'brands/atwork/multimedia',
                            )
                        )
                    ),
                    array(
                        'h1' => 'life and work improvement',
                        'url' => '',
                        'h2' => array(
                            array(
                                'col' => 'Cogy',
                                'url' => 'brands/life-and-work-improvement/cogy',
                            ),
                            array(
                                'col' => 'HUB',
                                'url' => 'brands/life-and-work-improvement/hub',
                            ),
                            array(
                                'col' => 'Ergotron',
                                'url' => 'brands/life-and-work-improvement/ergotron',
                            )
                        )
                    ),
                )
            ),
            array(
                'category' => 'Solutions',
                'content' => array(
                    array(
                        'h1' => 'Solutions for Corporate',
                        'url' => '',
                    ),
                    array(
                        'h1' => 'Solutions for Hospitality',
                        'url' => ''
                    ),
                    array(
                        'h1' => 'Solutions for Retail',
                        'url' => ''
                    ),
                    array(
                        'h1' => 'Solutions for Public Spaces',
                        'url' => ''
                    )
                )
            )
        );

        foreach($arr_nav as $a): ?>
            <div 
                class='col font_montserrat'
                style='
                    width: 250px;
                '
            >
                <div
                    style='
                        margin: 0 0 15px 0;
                        text-align: left;
                        font-weight: bold;
                    '
                >
                    <?= $a['category']; ?>
                </div>

                <div
                    style='
                        text-align: left;
                        font-size: 13px;
                    '
                >
                    <?php foreach($a['content'] as $b): ?>
                        <div
                            style='
                                padding: 12px 0;
                            '
                        >
                            <div>
                                <a 
                                    class='site_map_anchor'
                                    href='<?= base_url() . $b['url']; ?>'
                                    style='
                                        color: #444444;
                                    '
                                >
                                    <?= $b['h1']; ?>
                                </a>
                            </div>

                            <?php if(array_key_exists('h2', $b)): ?>
                                <div
                                    style='
                                        padding: 10px 15px;
                                    '
                                >
                                    <?php foreach($b['h2'] as $c): ?>
                                        <div
                                            style='
                                                padding: 3px 0;
                                            '
                                        >
                                            <a
                                                class='site_map_anchor'
                                                href='<?= base_url() . $c['url']; ?>'
                                                style='
                                                    color: #666666
                                                '
                                            >
                                                <?= $c['col']; ?>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Bar Bot -->
    <?php $this->view('site/desktop/common/bar_bot'); ?>
</body>
</html>