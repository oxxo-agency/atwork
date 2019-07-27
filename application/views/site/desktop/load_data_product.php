<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if($data['product']): ?>
    <div
        class='container_front txt-l'
        style='
            
        '
    >
        <?php $w_img = '200'; ?>
        <?php foreach($data['product'] as $p): ?>
            <a
                href='<?= base_url(); ?>product/<?= $p['product_segment_name']; ?>/<?= createUrl($p['product_brand_name']); ?>/<?= createUrl($p['product_category_name']); ?>/<?= createUrl($p['product_name']); ?>/<?= encrypt2($p['product_pid']); ?>'
                style='
                    text-decoration: none;
                    color: #666666;
                '
            >
                <div
                    class='col'
                    style='
                        background: ;
                        border-radius: 10px;
                        width: <?= $w_img; ?>px;
                    '
                >
                    <div
                        class='cimg container_product_img'
                        style='
                            width: <?= $w_img; ?>px;
                            height: <?= $w_img; ?>px;
                            background: white;
                            border-radius: 5px;
                        '
                    >
                        <img 
                            src='<?= $p['product_img'] != '' ? S3_URL . 'product_img/' . $p['product_pid'] . '/' . $p['product_img'] : base_url() . 'assets/images/site/no-img.png'; ?>'
                            style='
                                max-width: <?= $w_img; ?>px;
                                max-height: <?= $w_img; ?>px;
                            '
                        />
                    </div>

                    <div
                        style='
                            font-size: 13px;
                            padding: 4px 5px;
                            line-height: 18px;
                        '
                    >
                        <?= $p['product_name']; ?>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div
        style='
            padding: 15px 0;
        '
    >
        Belum ada produk
    </div>
<?php endif; ?>