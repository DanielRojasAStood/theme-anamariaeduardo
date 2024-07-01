<?php 
/* 
Template Name: Inicio
*/
get_header(); 
?>

  <main>
    <div class="loader">
      <div class="loader-logo">
        <img src="<?php echo IMG_BASE . 'Ana-Maria-y-Eduardo-logo.svg' ?>" class="header__logo" alt="" id="" />
      </div>
    </div>
    <section class="sectionHome">
      <img class="animation" src="<?php echo IMG_BASE . 'animation.gif'?>" alt="">
        <div class="sectionHome__button">
            <a class="button button--white" href="/welcome">WELCOME</a>
        </div>
    </section>
  </main>

  <script>
   document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.querySelector(".sectionHome").classList.add("show");
        document.querySelector(".loader").classList.add("hide");
        setTimeout(function() {
            document.querySelector(".loader").style.display = "none";
        }, 1000);
    }, 1200);
});

  </script>

<?php 
get_footer(); 
?>
