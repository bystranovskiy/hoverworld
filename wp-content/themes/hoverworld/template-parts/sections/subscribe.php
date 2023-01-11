<section class="section-subscribe">
    <div class="container">
        <div class="row">
            <?php
            $image = get_sub_field("image");
            if ($image) {
                ?>
                <div class="col-lg-4 order-1 order-lg-0 hw-animate hw-fadeInUp hw-delay-300">
                    <?php echo wp_get_attachment_image($image, array('446', '533'), "", array("class" => "img-responsive d-block mx-auto")); ?>
                </div>
            <?php } ?>
            <div class="<?php echo $image ? "col-lg-8" : "col-12"; ?> order-0 order-lg-1 d-flex flex-column justify-content-center">
                <h2 class="h3 text-center text-lg-left section-title hw-animate hw-fadeInUp"><?php the_sub_field('title'); ?></h2>
                <div class="text-center text-lg-left section-description hw-animate hw-fadeIn hw-delay-100"><?php the_sub_field('description'); ?></div>
                <div class="section-form hw-animate hw-fadeIn hw-delay-200" data-redirect="<?php the_sub_field('redirect_page'); ?>">
                    <?php the_sub_field('form'); ?>
                </div>

            </div>
        </div>
    </div>
</section>