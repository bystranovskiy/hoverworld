<section class="section-characters" id="characters">
    <div class="container text-center">
        <h2 class="hw-animate hw-fadeInUp"><?php the_sub_field('title'); ?></h2>
        <?php if (have_rows('characters')): ?>
            <div class="row characters-list active-item-2 py-5h hw-animate hw-fadeIn hw-delay-300" data-active="1">
                <?php $i = 0;
                while (have_rows('characters')): the_row(); ?>
                    <div class="col-4 px-0 char-item char-<?php echo $i;
                    echo $i === 1 ? ' active' : ''; ?>" data-index="<?php echo $i; ?>">
                        <div class="char-img">
                            <?php echo wp_get_attachment_image(get_sub_field("image"), "xl", "", array("class" => "img-responsive d-block mx-auto image-active")); ?>
                            <?php echo wp_get_attachment_image(get_sub_field("image_inactive"), "xl", "", array("class" => "img-responsive d-block mx-auto image-passive")); ?>
                        </div>
                        <div class="char-info">
                            <h3 class="h4 char-name"><?php the_sub_field('name'); ?></h3>
                            <p><?php the_sub_field('description'); ?></p>
                            <div class="row justify-content-center">
                                <div class="col-auto char-prop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="40" viewBox="0 0 52 40" fill="none">
                                        <path d="M38.9967 22.1714L37.0918 19.2347L51.5635 20.4517L38.9967 22.1714Z" fill="#00FCC0"/>
                                        <path d="M18.1492 6.11148H21.2446L26.1655 14.9215L27.5 31.5002L22 21.5002L12.5 30.0002L18.6255 14.3394L15.0009 16.747L8.06934 8.59838L15.0009 12.3023L18.1492 6.11148Z" fill="#00FCC0"/>
                                        <path d="M0 31.3813L11 28V32L21.5091 28.6034L28 33.4185L28.5 28.6034L36 28L40.1079 32.7571L36.5 34.5561H7.5L0 31.3813Z" fill="#00FCC0"/>
                                        <path d="M28.5726 15.3983L26.4561 11.5356L50.796 12.9113L28.5726 15.3983Z" fill="#00FCC0"/>
                                        <path d="M11.9854 2.93666L14.631 0L18.3084 0.687867L20.5837 3.99492L14.1019 7.46071L11.9854 2.93666Z" fill="#00FCC0"/>
                                        <path d="M25.3982 7.69799L23.4404 3.99409L46.7485 5.89896L25.3982 7.69799Z" fill="#00FCC0"/>
                                    </svg>
                                    <div class="prop-val"><?php the_sub_field('prop_1'); ?></div>
                                </div>
                                <div class="col-auto char-prop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="42" viewBox="0 0 56 42" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.47266 3.58649L15.7285 0L24.1975 0.629689L26.3222 4.27093L35.7059 8.40497H41.6667L47.9521 10.4583L50.6669 15.003L51.0505 19.712L41.2831 23.9282L30.2468 19.712L26.3222 15.4958L20.1253 11.0059L10.3579 9.33582L9.47266 3.58649ZM22.8403 1.34138L16.6435 0.766449L11.8926 3.09356V5.7492L20.1255 7.50138L30.8667 13.4697L31.929 16.3444L40.0734 19.794L47.5687 16.3444V10.8141L40.7817 8.84289L35.234 9.47258L24.965 5.11951L22.8403 1.34138Z" fill="#00FCC0"/>
                                        <path d="M13.5205 4.4162L16.7709 1.67969H22.0897L22.9761 4.4162L19.4894 6.30439L13.5205 4.4162Z" fill="#00FCC0"/>
                                        <path d="M43.5716 10.7375H35.032L33.2 13.8845L36.1549 16.5663L41.1486 17.6062L46.6743 14.596L43.5716 10.7375Z" fill="#00FCC0"/>
                                        <path d="M24.1285 5.675L22.0897 7.23481L31.1611 12.1332L33.2 9.83449L24.1285 5.675Z" fill="#00FCC0"/>
                                        <path d="M40.9141 26.9727L35.096 24.6982L23.2646 31.4871L12.1771 32.4735L0.344301 31.4871L12.1771 35.8923L25.0963 35.09L40.9141 26.9727Z" fill="#00FCC0"/>
                                        <path d="M31.7632 22.7111L26.7155 19.6662L17.8419 25.1558L10.7077 26.018L1.57386 24.6982L10.7077 29.2587L20.1745 28.6725L31.7632 22.7111Z" fill="#00FCC0"/>
                                        <path d="M17.3488 14.6365L21.3162 17.1774L13.405 20.1247L5.51714 17.1758L12.9118 17.1774L17.3488 14.6365Z" fill="#00FCC0"/>
                                    </svg>
                                    <div class="prop-val"><?php the_sub_field('prop_2'); ?></div>
                                </div>
                                <div class="col-auto char-prop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="41" viewBox="0 0 59 41" fill="none">
                                        <path d="M23.1152 19.4496L40.4078 0H51.7715L34.8083 19.4496L51.7715 36.5176H40.4078L23.1152 19.4496Z" fill="#00FCC0"/>
                                        <path d="M10.2118 19.4496L27.518 0H34.9102L17.9337 19.4496L34.9102 36.5176H27.518L10.2118 19.4496Z" fill="#00FCC0"/>
                                        <path d="M-0.000141144 19.4496L17.3281 0H21.4922L4.49404 19.4496L21.4922 36.5176H17.3281L-0.000141144 19.4496Z" fill="#00FCC0"/>
                                        <div class="prop-val"><?php the_sub_field('prop_3'); ?></div>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>
                <div class="col-12 d-flex justify-content-center slider-dots">
                    <span></span><span></span><span></span>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>