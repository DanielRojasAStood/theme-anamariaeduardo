<?php 
/* 
Template Name: Wedding
*/
get_header(); 

$gallery = [
  ["image" => "wedding-1.webp"], 
  ["image" => "wedding-2.webp"], 
  ["image" => "wedding-3.webp"], 
  ["image" => "wedding-4.webp"], 
  ["image" => "wedding-5.webp"], 
  ["image" => "wedding-6.webp"], 
  ["image" => "wedding-7.webp"], 
  ["image" => "wedding-8.webp"], 
];

$galleryMobile = [
  ["image" => "mwedding-1.webp"],
  ["image" => "mwedding-2.webp"],
  ["image" => "mwedding-3.webp"],
  ["image" => "mwedding-4.webp"],
  ["image" => "mwedding-5.webp"],
  ["image" => "mwedding-6.webp"],
  ["image" => "mwedding-7.webp"],
  ["image" => "mwedding-8.webp"],
  ["image" => "mwedding-9.webp"],
  ["image" => "mwedding-10.webp"],
  ["image" => "mwedding-11.webp"],
  ["image" => "mwedding-12.webp"],
  ["image" => "mwedding-13.webp"],
  ["image" => "mwedding-14.webp"],
  ["image" => "mwedding-15.webp"],
  ["image" => "mwedding-16.webp"],
  ["image" => "mwedding-17.webp"],
  ["image" => "mwedding-18.webp"],
  ["image" => "mwedding-19.webp"],
  ["image" => "mwedding-20.webp"],
  ["image" => "mwedding-21.webp"],
  ["image" => "mwedding-22.webp"],
  ["image" => "mwedding-23.webp"],
  ["image" => "mwedding-24.web"]
]
?>

<main class="section__main">
    <section class="sectionWedding">
        <div class="sectionWedding__bckg-fixed"></div>
        <div class="sectionWedding__img">
          <div class="slickGallery">
            <?php 
              foreach ($gallery as $img) {
                echo "<img src='" . IMG_BASE . "history/" . $img['image'] . "' alt=''>";
                }
            ?>
          </div>
          <div class="slickGallery slickGalleryMobile">
            <?php 
              foreach ($galleryMobile as $imgMobile) {
                echo "<img src='" . IMG_BASE . "history/" . $imgMobile['image'] . "' alt=''>";
                }
            ?>
          </div>
        </div>
        <div class="box text-center">
          <h2 class="text--22" style="height: 15px">WEDDING</h2>
          <h2 class="text--56 pb-7">Nuestra Boda</h2>
          <p class="text--20 pb-48">JULY 27th, 2024</p>

          <div class="grid grid--2">
            <div class="col">
              <p class="text--16" style="line-height: 7px">CEREMONY</p>
              <p class="text--30 pb-7">Ceremonia</p>
              <p class="text--16" style="letter-spacing:normal">Catedral de</p>
              <p class="text--16 pb-7" style="letter-spacing:normal">Santa Catalina de Alejandría</p>
              <a href="https://maps.app.goo.gl/d6BFo6xpEVm6JMHZ6" target="_blank" class="button button--pink">Map Location</a>
              <p class="text--14 pt-7 pb-7">3:00 p.m.</p>
              <button type="button" href="#" class="button button--pink" data-open-modal="modal-3">Dress Code</button>
            </div>
            <div class="col">
              <p class="text--16" style="line-height: 7px">RECEPTION</p>
              <p class="text--30 pb-7">Recepción</p>
              <p class="text--16" style="letter-spacing:normal">Centro de Convenciones</p>
              <p class="text--16 pb-7" style="letter-spacing:normal">Cartagena de Indias</p>
              <a href="https://maps.app.goo.gl/jTUNiPXTMiGJz85m8" target="_blank" class="button button--pink">Map Location</a>
              <p class="text--14 pt-7 pb-7">5:00 p.m.</p>
              <div class="grid grid--2" style="row-gap: 10px;">
                <button type="button" class="button button--pink" data-open-modal="modal-5">More info</button>
                <a href="https://www.myregistry.com/giftlist/laloandana" target="_blank" class="button button--pink">Gift Registry</a>
              </div>
            </div>

          </div>
        </div>
        <div class="sectionWedding__countdown">
          <h2 class="text--22 text-center">COUNTDOWN</h2>
          <p class="text--30 text-center">celebrate with us!</p>
          <div class="countdown-timer" id="countdown-timer"></div>
        </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
