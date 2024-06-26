<?php 
/* 
Template Name: RSVP
*/
get_header();

?>

<main>
    <section class="sectionRSVP">
        <div class="sectionRSVP__bckg-fixed"></div>
        <div class="box text-center">
            <p class="text--22" style="height: 15px">R.S.V.P.</p>
            <h2 class="text--56 pb-57">Celebrate with us!</h2>
            <?php echo do_shortcode('[contact-form-7 id="f96efb5" title="RSVP"]')?>
        </div>
    </section>
</main>


<?php get_footer();