<?php 
/* 
Template Name: Events
*/
get_header(); 
?>

  <main>
    <section class="sectionEvents">
        <div class="sectionEvents__bckg-fixed"></div>
        <div class="box text-center">
          <div class="grid grid--3">
            <div class="sectionEvents__text mobile">
              <h2 class="text--22" style="height: 15px">EVENTS</h2>
              <h2 class="text--56 pb-7">Eventos</h2>
            </div>
            <div>
              <div class="pb-7">
                <img src="<?php echo IMG_BASE . 'beach.png'?>" alt="">
              </div>
              <div class="col">
                <p class="text--16" style="line-height: 7px">WELCOME</p>
                <p class="text--30 pb-7">Bienvenida</p>
                <p class="text--16" style="letter-spacing:normal">July 25th, 2024</p>
                <p class="text--16 pb-7" style="letter-spacing:normal">Aguazul Beach Resort, Barú</p>
                <a href="#" class="button button--pink">Map Location</a>
                <p class="text--14 pt-7 pb-7">8:30 a.m. 7:00 p.m.</p>
                <div class="pb-7">
                  <button type="button" href="#" class="button button--pink" data-modal-1>More Info.</button>
                </div>
                <button type="button" href="#" class="button button--pink" data-modal-2>Dress Code</button>
              </div>
            </div>
            <div class="sectionEvents__text desktop">
              <h2 class="text--22" style="height: 15px">EVENTS</h2>
              <h2 class="text--56 pb-7">Eventos</h2>
            </div>
            <div>
              <div class="pb-7">
                <img src="<?php echo IMG_BASE . 'church.png'?>" alt="">
              </div>
              <div class="col">
                <p class="text--16" style="line-height: 7px">FAREWELL</p>
                <p class="text--30 pb-7">Despedida</p>
                <p class="text--16" style="letter-spacing:normal">July 28th, 2024</p>
                <p class="text--16 pb-7" style="letter-spacing:normal">Hotel Movich, Rooftop</p>
                <a href="#" class="button button--pink">Map Location</a>
                <p class="text--14 pt-7 pb-7">3:00 p.m.</p>
                <a href="#" href="#" class="button button--pink">Dress Code</a>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
