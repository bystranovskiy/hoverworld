<?php /* Template Name: Thank you */ ?>

<?php get_header(); ?>
    <main>
        <section class="section-thank-you">
            <div class="container text-center">
                <?php the_content();?>
                <a class="btn mt-3" href="<?php echo get_home_url(); ?>"><span><?php echo __("Back", "hoverworld"); ?></span></a>
            </div>

        </section>
    </main>
<?php
get_footer();

