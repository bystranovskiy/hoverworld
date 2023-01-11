<section class="section-helpers" id="pets">
    <div class="container text-center">
        <h2 class="hw-animate hw-fadeInUp"><?php the_sub_field('title'); ?></h2>
        <div class="tabs-toggles hw-animate hw-fadeInUp hw-delay-300">
            <div class="toggle-item active"><span class="h5"><?php echo __("Pets", "hoverworld"); ?></span></div>
            <div class="toggle-item"><span class="h5"><?php echo __("Hovers", "hoverworld"); ?></span></div>
        </div>
        <div class="tabs-content hw-animate hw-fadeInUp hw-delay-500">
            <div class="content-item">
                <?php if (have_rows('pets')): ?>
                    <div class="pets-list">
                        <?php $i = 1;
                        while (have_rows('pets')): the_row(); ?>
                            <div class="pet-item">
                                <div class="inner-wrapper">
                                    <?php
                                    $image = get_sub_field("image");
                                    $image_attributes = wp_get_attachment_image_src($image, "large");
                                    ?>
                                    <img src="<?php echo $image_attributes[0]; ?>"
                                         width="<?php echo round($image_attributes[1] / 2); ?>"
                                         height="<?php echo round($image_attributes[2] / 2); ?>"
                                         alt="<?php echo __("Pet") . "-" . $i; ?>"/>
                                </div>
                                <div class="info">
                                    <div class="info-content">
                                        <span><?php the_sub_field('info'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="content-item" style="display: none;">
                <?php if (have_rows('hovers')): ?>
                    <div class="hovers-top-list">
                        <?php $i = 1;
                        while (have_rows('hovers')): the_row(); ?>
                            <div class="hover-item">
                                <div class="info">
                                    <div class="h5"><?php the_sub_field('name'); ?></div>
                                    <p><?php the_sub_field('info'); ?></p>
                                </div>
                                <?php
                                $image = get_sub_field("image");
                                $image_attributes = wp_get_attachment_image_src($image, "large");
                                ?>
                                <img src="<?php echo $image_attributes[0]; ?>"
                                     class="mx-auto img-responsive"
                                     width="<?php echo round($image_attributes[1] / 2); ?>"
                                     height="<?php echo round($image_attributes[2] / 2); ?>"
                                     alt="<?php echo __("Hover") . "-" . $i; ?>"/>
                            </div>
                            <?php $i++; endwhile; ?>
                    </div>
                    <div class="hovers-bottom-list">
                        <?php $i = 1;
                        while (have_rows('hovers')): the_row(); ?>
                            <div class="hover-item">
                                <?php
                                $image = get_sub_field("image");
                                $image_attributes = wp_get_attachment_image_src($image, "large");
                                ?>
                                <img src="<?php echo $image_attributes[0]; ?>"
                                     class="mx-auto img-responsive"
                                     width="<?php echo round($image_attributes[1] / 4); ?>"
                                     height="<?php echo round($image_attributes[2] / 4); ?>"
                                     alt="<?php echo __("Hover") . "-" . $i; ?>"/>
                            </div>
                            <?php $i++; endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>