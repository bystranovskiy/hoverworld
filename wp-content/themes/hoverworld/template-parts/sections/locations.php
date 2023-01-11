<section class="section-locations" id="explore">
    <div class="container">
        <div class="locations-wrapper text-center">
            <div class="locations-inner">
                <div class="section-title-wrapper hw-animate hw-fadeInDown">
                    <div class="section-title">
                        <h2 class="h4"><?php the_sub_field('title'); ?></h2>
                    </div>
                </div>


                <?php if (have_rows('locations')): ?>
                    <div class="locations-slider hw-animate hw-fadeIn hw-delay-200">
                        <?php $i = 1;
                        while (have_rows('locations')): the_row(); ?>
                            <div class="location-item">
                                <div class="location-num hw-animate hw-fadeIn hw-delay-300"><?php echo __("Location ", "hoverworld");
                                    echo $i < 10 ? "0" : "";
                                    echo $i; ?></div>
                                <h3 class="h2 location-title hw-animate hw-fadeInUp hw-delay-400"><?php the_sub_field('title'); ?></h3>
                                <?php
                                $images = get_sub_field('gallery');
                                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                if ($images): ?>
                                    <div class="location-gallery hw-animate hw-fadeIn hw-delay-600">
                                        <?php foreach ($images as $image_id): ?>
                                            <div class="location-gallery-item">
                                                <?php echo wp_get_attachment_image($image_id, $size, "", array( "class" => "img-responsive" )); ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="row location-description hw-animate hw-fadeIn hw-delay-300">
                                    <div class="col-6 col-md-3 mb-4">
                                        <div class="description-item">
                                            <div class="item-inner">
                                                <div class="item-map">
                                                    <?php echo wp_get_attachment_image(get_sub_field("map")); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-4">
                                        <div class="description-item">
                                            <div class="item-inner">
                                                <div class="item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32"
                                                         viewBox="0 0 40 32" fill="none">
                                                        <path d="M16.3472 0L0.522949 32H1.89356H4.63477C2.74084 25.5 9.07886 23.7917 12.4846 23.75C24.4463 25.25 24.1971 21.4531 24.5709 18.5C25.5677 10.625 31.0501 11.0631 32.9191 12.125L29.3057 5.25L24.0725 13.5L16.3472 0Z"
                                                              fill="white"/>
                                                        <path d="M33.6667 31.5L9.36959 32C7.62519 31.5 7.99899 28.25 10.491 28C16.8456 28.125 29.4303 28 28.6827 21.875C27.9187 15.6154 31.3408 14.3333 33.6667 14.375L39.5229 25.625H30.6763L33.6667 31.5Z"
                                                              fill="white"/>
                                                    </svg>
                                                </div>
                                                <div class="stars stars-<?php the_sub_field('difficulty'); ?>">
                                                    <?php for ($j = 0; $j < 5; $j++) { ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17"
                                                             viewBox="0 0 19 17" fill="none">
                                                            <path d="M9.76115 0L12.4813 4.67893L18.9993 6.1967L14.8126 10.5276L15.4707 16.2232L9.76115 13.6469L4.05163 16.2232L4.71043 10.5276L0.522949 6.1967L6.45888 4.67893L9.76115 0Z"
                                                                  fill="white" fill-opacity="0.2"/>
                                                        </svg>
                                                    <?php } ?>
                                                </div>
                                                <div class="item-name"><?php echo __("Difficulty", "hoverworld"); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-4">
                                        <div class="description-item">
                                            <div class="item-inner">
                                                <div class="item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="19"
                                                         viewBox="0 0 40 19" fill="none">
                                                        <path d="M0.045898 10.0409L8.85184 -3.8492e-07L12.7993 19L0.045898 10.0409Z"
                                                              fill="white"/>
                                                        <path d="M39.0869 10.0409L30.281 -3.8492e-07L26.3335 19L39.0869 10.0409Z"
                                                              fill="white"/>
                                                        <rect x="9.0459" y="6" width="22" height="8" fill="white"/>
                                                    </svg>
                                                </div>
                                                <div class="item-value">
                                                    <?php echo get_sub_field('length') . " " . __("km", "hoverworld"); ?>
                                                </div>
                                                <div class="item-name"><?php echo __("Length", "hoverworld"); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-4">
                                        <div class="description-item">
                                            <div class="item-inner">
                                                <div class="item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36"
                                                         viewBox="0 0 34 36" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M33.5229 6.88656L21.0244 0L18.8303 6.48771C17.9451 6.33863 17.0341 6.26087 16.104 6.26087C7.49884 6.26087 0.522949 12.9182 0.522949 21.1304C0.522949 29.3427 7.49884 36 16.104 36C24.7092 36 31.6851 29.3427 31.6851 21.1304C31.6851 17.6726 30.4483 14.4904 28.3739 11.9648L33.5229 6.88656ZM27.3354 21.913C27.3354 28.3964 22.0775 33 15.284 33C8.4904 33 3.6167 28.3964 3.6167 21.913C3.6167 15.4297 8.4904 10.1739 15.284 10.1739C22.0775 10.1739 27.3354 15.4297 27.3354 21.913Z"
                                                              fill="white"/>
                                                        <path d="M14.6543 23.8512L12.0037 12.1304C16.5337 11.0799 19.5406 11.9313 23.4845 14.8696L14.6543 23.8512Z"
                                                              fill="white"/>
                                                    </svg>
                                                </div>
                                                <div class="item-value">
                                                    <?php
                                                    $time = get_sub_field('time');
                                                    $preparr = explode(':', $time);
                                                    $min = $preparr[0];
                                                    $sec = $preparr[1];
                                                    echo $min . "m" . " " . $sec . "s"; ?>
                                                </div>
                                                <div class="item-name"><?php echo __("Race time", "hoverworld"); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 description-text">
                                        <?php the_sub_field('description'); ?>
                                    </div>
                                </div>

                            </div>
                            <?php $i++; endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>