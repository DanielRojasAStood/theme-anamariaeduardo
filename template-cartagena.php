<?php 
/* 
Template Name: Cartagena
*/
get_header(); 
?>

<main class="section__main">
    <section class="sectionCartagena">
        <div class="sectionCartagena__bckg-fixed"></div>
        <div class="box text-center">
          <h2 class="text--56 pb-57">Cartagena de Indias</h2>

          <p class="text--11">
          We are very excited to have our wedding in Colombia’s coastal gem, Cartagena. A UNESCO world heritage site, this city is one of South America’s greatest cultural treasures. The walls of Cartagena de Indias are located in the historical center, “the walled city”, were you will find squares, cobblestone streets and beautiful, colorful colonial buildings.
          </p>

          <p class="text--11">
          The best way to experience Cartagena is to walk and explore it for yourself by getting lost in the maze of narrow streets and luscious green plazas. We recommend staying in the walled city were everything is walking distance. Constant live music on the streets, great restaurants and quirky bars, add life to the streets of Cartagena.
          </p>

          <p class="text--11">
          Nos sentimos muy emocionados de realizar nuestra boda en Cartagena. Una ciudad llena de magia, encanto, historia y tradición, la cual se caracteriza por su gran muralla, calles empedradas y hermosas casas coloniales. Cartagena es denominada como patrimonio histórico de la humanidad por la UNESCO y considerada como uno de los mayores tesoros culturales de Latino América.
          </p>

          <p class="text--11 pb-57">
          Quisiéramos hacerles algunas recomendaciones, para que puedan disfrutar al máximo de su estadía en este maravilloso lugar. La mejor manera de vivir Cartagena, es caminar y explorar sus laberintos de calles estrechas y exuberantes plazas. Lo ideal, es que se hospeden en el  casco histórico, para que puedan estar a poca distancia de lugares de interés, y así experimentar de la música en vivo, excelente gastronomía y arte popular.        
          </p>

          <div class="pb-28">
            <p class="text--22">PLACES OF INTEREST</p>
            <h2 class="text--56">Sitios de Interés</h2>
          </div>
          <?php 
            $icons = [
              [
                "id" => "/places/#desserts-brunch",
                "name" => "Desserts & Brunch",
                "name_es" => "Postres y Brunch",
                "icon" => "icon-3",
                "link" => "/places#Brunch Desserts"
              ],
              [
                "id" => "/places/#places-to-visit",
                "name" => "Places to Visit",
                "name_es" => "Lugares para visitar",
                "icon" => "icon-4",
                "link" => "/places#Bars"
              ],
              [
                "id" => "/places/#malls-boutiques",
                "name" => "Malls & Boutiques",
                "name_es" => "Centros Comerciales y Boutiques",
                "icon" => "icon-5",
                "link" => "/places#boutiques"
              ],
              [
                "id" => "/places/#hotels",
                "name" => "Hotels",
                "name_es" => "Hoteles",
                "icon" => "icon-1",
                "link" => "/places#hotels"
              ],
              [
                "id" => "/places/#restaurants",
                "name" => "Restaurants",
                "name_es" => "Restaurantes",
                "icon" => "icon-2",
                "link" => "/places#Restaurants"
              ],
              [
                "id" => "/places/#beauty-salons-barber",
                "name" => "Beauty Salons & Barber",
                "name_es" => "Peluquerías y Belleza",
                "icon" => "icon-6",
                "link" => "/places#Beauty Salons"
              ],              
            ]
          ?>

          <div class="sectionCartagena__icons">
            <?php foreach ($icons as $key => $icon) { ?>
              <a href="<?php echo $icon['id']; ?>" class="text--28">
                <div>
                  <h3><?php echo $icon['name']; ?></h3> 
                  <p><?php echo $icon['name_es']; ?></p>
                </div>
                <span>
                  <?php 
                      $icon_name = $icon['icon'];
                      get_template_part('template-parts/content', 'icono');
                      display_icon($icon_name); 
                  ?>
                </span>
              </a>
            <?php } ?>
          </div>

        </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
