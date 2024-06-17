<?php 
/* 
Template Name: Inicio
*/
get_header(); 
?>

  <main>
    <section class="sectionHome">
        <div class="sectionHome__button">
            <a class="button button--white" href="/welcome">WELCOME</a>
        </div>
    </section>
    <!-- Modals -->
    <section class="modal" style="display: none" data-modal="modal-1">
      <div class="modal__wrapper">
        <div class="modal__body">
          <button type="button" data-close-modal>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
              <path
                fill="#fff"
                stroke-miterlimit="10"
                d="M7.72 6.28 6.28 7.72 23.56 25 6.28 42.28l1.44 1.44L25 26.44l17.28 17.28 1.44-1.44L26.44 25 43.72 7.72l-1.44-1.44L25 23.56z"
                font-family="none"
                font-size="none"
                font-weight="none"
                style="mix-blend-mode: normal"
                text-anchor="none"
                transform="scale(5.1)"
              />
            </svg>
          </button>
          <img
            src="/wp-content/themes/antuanet-todd/img/dress-code-antuanet-DEF.png"
            alt=""
            id=""
          />
        </div>
      </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
