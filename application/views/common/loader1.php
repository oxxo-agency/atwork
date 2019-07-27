<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div
    style='
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(255, 255, 255, 0.35);
        text-align: center;
        z-index: 4;
    '
    class='loader1 none'
>
    <div
        style='
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        '
    >
        <img src='<?= base_url(); ?>assets/images/site/loader1.gif' />
    </div>
</div>