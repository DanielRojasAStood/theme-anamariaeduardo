<?php 
/* 
Template Name: Wedding
*/
get_header(); 
?>

  <main>
    <section class="sectionWedding">
        <div class="sectionWedding__bckg-fixed"></div>
        <div class="box text-center">
          <h2 class="text--22" style="height: 15px">WEDDING</h2>
          <h2 class="text--56 pb-7">Nuestra Boda</h2>
          <p class="text--20 pb-48">JULY 27th, 2024</p>

          <div class="grid grid--2">
            <div class="col">
              <p class="text--16" style="line-height: 7px">CEREMONY</p>
              <p class="text--30 pb-7">Ceremonia</p>
              <p class="text--16" style="letter-spacing:normal">Catedral</p>
              <p class="text--16 pb-7" style="letter-spacing:normal">Santa Catalina de Alejandría</p>
              <a href="https://maps.app.goo.gl/d6BFo6xpEVm6JMHZ6" target="_blank" class="button button--pink">Map Location</a>
              <p class="text--14 pt-7 pb-7">2:30 p.m.</p>
              <button type="button" href="#" class="button button--pink" data-open-modal="modal-3">Dress Code</button>
            </div>
            <div class="col">
              <p class="text--16" style="line-height: 7px">RECEPTION</p>
              <p class="text--30 pb-7">Recepción</p>
              <p class="text--16" style="letter-spacing:normal">Centro de Convenciones</p>
              <p class="text--16 pb-7" style="letter-spacing:normal">Cartagena de Indias</p>
              <a href="https://maps.app.goo.gl/jTUNiPXTMiGJz85m8" target="_blank" class="button button--pink">Map Location</a>
              <p class="text--14 pt-7 pb-7">5:00 p.m.</p>
              <a href="#" href="#" class="button button--pink">Registry</a>
            </div>

          </div>
        </div>
        <div class="sectionWedding__countdown">
          <h2 class="text--22 text-center">CELEBRATE WITH US!</h2>
          <div class="countdown-timer" id="countdown-timer"></div>
        </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
