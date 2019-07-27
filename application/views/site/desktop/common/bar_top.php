<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Header -->
<div
    style="
        flex-direction: row;
        display:flex;
        height: 100px;
        align-items:center;
        position:sticky;
        top:0;
        left:0;
        background:white;
        z-index:10;
        font-family: 'Montserrat', sans-serif;
    "
>
    <div
        style="
            display:flex;
            flex:0.1;
            margin: 0 0 0 100px;
            color:#EF424C;
            font-weight:bold;
            font-size:24px
        "
    >
        atwork
    </div>

    <div
        style="
            display:flex;
            flex: 0.8;
            padding: 0 0 0 30px
        "
    >
        <div
            style="
                display: flex;
                align-items:center;
                padding: 0 0 0 30px
            "
        >
            <?php
            $array_btn = array('Home', 'About', 'officeart', '@twork', 'Life and Work Improvement', 'Solutions', 'Blogs', 'Contact us');
            $array_href = array(base_url(), base_url().'#about', base_url().'brands/officeart', base_url().'brands/atwork', base_url().'brands/life-and-work-improvement', base_url().'brands/solutions', base_url().'#blogs', base_url().'#contactus');

            for($i = 0; $i < count($array_btn); $i++): 
            ?>
                <a 
                    style="
                        padding: 0 20px;
                        text-decoration:none;
                        color:#333333;
                        white-space:normal;
                        display:inline-block;
                        <?= $i == 4 ? 'width: 120px;' : ''; ?>;
                        align-items:center;
                        font-size:14px
                    "
                    href="<?= $array_href[$i];?>"
                >
                    <?= $array_btn[$i];?>
                </a>    
            <?php endfor; ?>
        </div>
    </div>

    <div
        style="
            display: flex;
            flex: 0.2;
            font-size:14px
        "
    >
        <a 
            href="signup"
            style="       
                text-decoration:none;
                color: #333333
            "
        >
            <div
                style="
                    padding: 6px 15px;
                    border-radius: 5px;
                    margin: 0 15px 0 20px;
                    background: #EF424C;
                    color:white
                "
            >
                Sign Up
            </div>
        </a>
        <a 
            href="signin"
            style="       
                text-decoration:none;
                color: #333333
            "
        >
            <div
                style="
                    padding: 6px 15px;
                    border-radius: 5px;
                    border: 1px solid #EF424C;
                "
            >
                Sign In
            </div>
        </a>
    </div>
</div>