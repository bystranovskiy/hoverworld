<?php
$image = get_sub_field('background_image');
$img_set = $image ? 'style="background-image: url(' . wp_get_attachment_image_src($image, 'xl')[0] . '); background-image: -webkit-image-set(url(' . wp_get_attachment_image_src($image, 'xl')[0] . ') 1x, url(' . wp_get_attachment_image_src($image, 'xxl')[0] . ') 2x); background-image: image-set(url(' . wp_get_attachment_image_src($image, 'xl')[0] . ') 1x, url(' . wp_get_attachment_image_src($image, 'xxl')[0] . ') 2x);"' : ""; ?>
<section class="section-intro d-flex flex-column justify-content-between"<?php echo $img_set; ?>>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col col-md-8 col-lg-9 hw-animate hw-fadeInRight hw-delay-300">
                <div class="intro-title">
                    <h1>
                        <span class="hw-animate hw-fadeInUp hw-delay-500"><?php echo __("Welcome to", "hoverworld");?></span><br>
                        <span class="hw-animate hw-fadeInUp hw-delay-600"><strong><?php echo __("Hover World", "hoverworld");?></strong></span>
                    </h1>
                </div>
            </div>
            <div class="col-auto">
                <span class="text-uppercase d-none d-md-block mt-5"><svg xmlns="http://www.w3.org/2000/svg" width="39"
                                                                         height="12" viewBox="0 0 39 12" fill="none">
                    <path opacity="0.45" d="M35 12L27 -3.8147e-06L31 -3.98954e-06L39 12L35 12Z" fill="white"/>
                    <path opacity="0.45" d="M26 12L18 -3.8147e-06L22 -3.98954e-06L30 12L26 12Z" fill="white"/>
                    <path opacity="0.45" d="M17 12L9 -3.8147e-06L13 -3.98954e-06L21 12L17 12Z" fill="white"/>
                    <path opacity="0.45" d="M8 12L-5.24537e-07 -3.8147e-06L4 -3.98954e-06L12 12L8 12Z" fill="white"/>
                </svg> <?php echo __("m2e PC GAME", "hoverworld"); ?> <img
                            src="<?php echo THEME_URI . '/src/img/coin.png'; ?>" alt="coin" width="11"
                            height="11"></span>
            </div>
        </div>
    </div>
    <div class="container text-right">
        <button class="intro-button hw-animate hw-fadeIn hw-delay-800"><span class="h4"><?php echo __("Watch trailer", "hoverworld");?></span></button>
        <div class="intro-description d-lg-none text-left text-uppercase">
            <?php the_sub_field('description'); ?>
        </div>
        <div class="intro-character">
            <div class="img-wrap hw-animate hw-fadeInLeft hw-delay-300">
                <img src="<?php echo THEME_URI . '/src/img/intro-character.png'; ?>"
                     class=""
                     alt="intro-character"
                     width="352"
                     height="251">
            </div>
        </div>
    </div>
</section>

<div class="trailer-popup" style="display: none;">
    <div class="trailer-window">
        <div class="inner-wrapper">
            <?php
            $video_url = get_sub_field("youtube_video_url");
            $video_ID = explode("?v=", $video_url)[1];
            ?>
            <iframe
                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:90px;text-align:center;}</style><a href=https://www.youtube.com/embed/<?php echo $video_ID;?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $video_ID;?>/sddefault.jpg class='nolazy'><span><svg xmlns='http://www.w3.org/2000/svg' width='90' height='90' viewBox='0 0 90 90' fill='none'> <path d='M56.6667 45.9309L40.5556 27.6547L33.3334 62.238L56.6667 45.9309Z' fill='white'/> <circle opacity='0.21' cx='45' cy='45' r='44.5' fill='white' fill-opacity='0.4' stroke='white'/> </svg></span></a>"
                    src="https://www.youtube.com/embed/<?php echo $video_ID;?>"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
            ></iframe>
        </div>
        <div class="close"></div>
    </div>
</div>