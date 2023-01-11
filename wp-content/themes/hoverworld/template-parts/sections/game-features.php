<section class="section-game-features" id="traits">
    <div class="container text-center">
        <h2 class="d-inline-block hw-animate hw-fadeInUp"><span><?php the_sub_field('title'); ?></span></h2>
    </div>
    <div class="container pt-5 hw-animate hw-fadeIn hw-delay-300">
        <div class="row features-block">
            <div class="col-md-8 offset-md-2 offset-lg-0 col-lg-5">
                <?php if (have_rows('game-features')): ?>
                    <div class="features-images">
                        <?php $i = 0;
                        while (have_rows('game-features')): the_row();
                            $image = get_sub_field("image");
                            echo wp_get_attachment_image($image, "xl", "", array("class" => "img-responsive mx-auto", "style" => $i > 0 ? "display:none" : "display:block"));
                            $i++;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-8 offset-md-2 offset-lg-0 col-lg-7 d-flex flex-column justify-content-center">
                <?php if (have_rows('game-features')): ?>
                    <div class="features-list">
                        <?php $i = 0;
                        while (have_rows('game-features')): the_row(); ?>
                            <div class="features-item<?php echo $i === 0 ? ' active' : ''; ?>">
                                <div class="item-title">
                                    <span class="h4"><?php the_sub_field('title'); ?></span>
                                </div>
                                <?php if (get_sub_field('description')) { ?>
                                    <div class="item-description">
                                        <?php the_sub_field('description'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php $i++;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>