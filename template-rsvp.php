<?php 
/* 
Template Name: RSVP
*/
get_header();

?>

<main class="section__main">
    <section class="sectionRSVP">
        <div class="sectionRSVP__bckg-fixed"></div>
        <div class="box text-center">
            <p class="text--22" style="height: 15px">R.S.V.P.</p>
            <h2 class="text--56">Celebrate with us!</h2>
            <p class="text--18 text-center font-hatton">Kindly respond by JULY 16th, 2024</p>
            <p class="text--16 text-center pb-57" style="letter-spacing: 1.6px;">Por favor confirmar asistencia antes de JULIO 16, 2024</p>
            <?php echo do_shortcode('[contact-form-7 id="f96efb5" title="RSVP"]')?>
        </div>
    </section>

    <div id="successModal" class="modal-rsvp">
        <div class="modal-rsvp-content">
            <span class="close">&times;</span>
            <p class="text--24">THANKS</p>
            <p class="text--18">Your confirmation has been sent successfully.</p>
        </div>
    </div>
</main>


<?php get_footer();