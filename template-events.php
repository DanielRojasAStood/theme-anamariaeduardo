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
          <div class="grid grid--1-4">
            
            <div class="sectionEvents__text desktop">
              <h2 class="text--22" style="height: 15px">EVENTS</h2>
              <h2 class="text--56 pb-7">Eventos</h2>
            </div>
            <div class="border">
              <div class="grid grid--1-3 pb-28">
                <div class="pb-7">
                  <img src="<?php echo IMG_BASE . 'beach.png'?>" alt="">
                </div>
                <div class="col">
                  <p class="text--16">WELCOME <br> BEACH DAY</p>
                  <p class="text--30 pb-7">Bienvenida <br> Dia de Playa</p>
                  <p class="text--16" style="letter-spacing:normal">July 25th, 2024</p>
                  <p class="text--16 pb-7" style="letter-spacing:normal">Agua Azul Beach Resort, Barú</p>
                  <p class="text--14 pb-11">8:30 a.m. 7:00 p.m.</p>
                  <div class="flex pb-7">
                    <button type="button" class="button button--pink" data-open-modal="modal-4">More Info.</button>
                  </div>
                  <div class="flex">
                    <div class="pb-7">
                      <button type="button" href="#" class="button button--pink" data-open-modal="modal-1">Dress Code</button>
                    </div>
                    <div class="pb-7">
                      <a href="https://maps.app.goo.gl/pwYDhzBV1gMPEKGm6" target="_blank" class="button button--pink" data-modal-1>Map Location</a>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="grid grid--1-3 pb-28">
                <div class="pb-7">
                  <img src="<?php echo IMG_BASE . 'church.png'?>" alt="">
                </div>
                <div class="col">
                  <p class="text--16">FAREWELL <br> SUNSET SOIREE</p>
                  <p class="text--30 pb-7">Despedida <br> Velada de atardecer</p>
                  <p class="text--16" style="letter-spacing:normal">July 28th, 2024</p>
                  <p class="text--16 pb-7" style="letter-spacing:normal">Hotel Movich, Rooftop</p>
                  <p class="text--14 pb-11">3:00 p.m.</p>
                  <div class="flex">
                    <div class="pb-7">
                      <button type="button" class="button button--pink" data-open-modal="modal-2">Dress Code</button>
                    </div>
                    <div class="pb-7">
                      <a href="https://maps.app.goo.gl/m7TsbLtch1Y3kmjA6" target="_blank" class="button button--pink">Map Location</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
