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
            <h2 class="text--56">Celebrate with us!</h2>
            <p class="text--18 text-center font-hatton">Kindly respond by JULY 10th, 2024</p>
            <p class="text--16 text-center pb-57" style="letter-spacing: 1.6px;">Por favor confirmar asistencia antes de JULIO 10, 2024</p>
            <?php echo do_shortcode('[contact-form-7 id="f96efb5" title="RSVP"]')?>
        </div>
    </section>
</main>


<?php get_footer();