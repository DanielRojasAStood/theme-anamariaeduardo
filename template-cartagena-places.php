<?php 
/* 
Template Name: Places
*/
get_header(); 

$places = [
  "hotels" => [
    "title" => "Hotels",
    "places"=>[
      [
          "name"=> "HOTEL\nEL MARQUÉS",
          "address"=> "Nuestra Sra. del Carmen # 33 - 41",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 317 6680456",
          "link"=> "https://hotelelmarques.co/"
      ],
      [
          "name"=> "HYATT\nREGENCY",
          "address"=> "Cra. 1 # 12 - 118",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 (605) 6941282",
          "link"=> "https://www.hyatt.com/es-ES/hotel/colombia/hyatt-regency-cartagena/ctgrc"
      ],
      [
          "name"=> "HOTEL\nLAS AMÉRICAS",
          "address"=> "Anillo Vial, Sector Cielo Mar",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 (605) 6930592",
          "link"=> "https://www.hotellasamericas.com.co/"
      ],
      [
          "name"=> "HOTEL SANTA\nCATALINA",
          "address"=> "Calle del Candilejo # 32 - 62",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6517099",
          "link"=> "https://www.santacatalinahotel.com.co/"
      ],
      [
          "name"=> "CASONA\nDEL COLEGIO Y\nCASONA DEL\nPORVENIR",
          "address"=> "Calle del Colegio # 34-82",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 300 3844185",
          "link"=> "https://api.whatsapp.com/send?phone=573003844185"
      ],
      [
          "name"=> "HOTEL NH ROYAL\nURBAN CARTAGENA",
          "address"=> "Cra. 7 # 34 - 10",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6455050",
          "link"=> null
      ],
      [
          "name"=> "BASTION\nLUXURY HOTEL",
          "address"=> "Calle del Sargento Mayor # 6 - 87",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6424100",
          "link"=> "https://www.bastionluxuryhotel.com/"
      ],
      [
          "name"=> "HOTEL SANTA\nCLARA BY SOFITEL",
          "address"=> "Calle Del Torno # 39 - 29",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 5 6504700",
          "link"=> "https://www.sofitellegendsantaclara.com/"
      ],
      [
          "name"=> "CHARLESTON\nSANTA TERESA",
          "address"=> "Cra. 7 # 34 -10",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (5) 6649494",
          "link"=> "https://www.hotelcharlestonsantateresa.com/"
      ],
      [
          "name"=> "MOVICH\nHOTELS",
          "address"=> "Calle Velez Danies # 4 - 39",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 5 6642995",
          "link"=> "https://www.movichhotels.com/es/hotel-movichcartagena-en-cartagena/"
      ],
      [
          "name"=> "HOTEL\nSAN AGUSTIN",
          "address"=> "Univ. de Cartagena # 36-44",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 5 6810000",
          "link"=> "https://www.hotelcasasanagustin.com/es/home.html"
      ],
      [
          "name"=> "NÁCAR HOTEL\nBY HILTON",
          "address"=> "Calle del Curato No. 38-99",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 5 6517050",
          "link"=> "https://www.hiltonhotels.com/es_XM/colombia/nacar-hotel-cartagena/"
      ],
      [
          "name"=> "HOTEL CASA\nDEL COLISEO",
          "address"=> "Calle del Coliseo #35 - 23",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 5 6600566",
          "link"=> "https://hotelcasadelcoliseocartagena.com/"
      ],
      [
          "name"=> "CASA\nLA MERCED",
          "address"=> "Calle de Don Sancho # 36",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 5 6647727",
          "link"=> "https://mustique.co/landing/bienvenido-casa-la-merced/"
      ],
      [
          "name"=> "HOTEL CASA\nDON LUIS",
          "address"=> "Calle del Cuartel # 36 – 16",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6930174",
          "link"=> "https://www.instagram.com/hotelcasadonluis/"
      ],
      [
          "name"=> "ANANDA\nBOUTIQUE HOTEL",
          "address"=> "Cra. 5 #36 77",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6786464",
          "link"=> "https://hotelcasadelcoliseocartagena.com/"
      ]
    ],
  ],
  "restaurants" => [
    "title" => "Restaurants",
    "places" => [
      [
          "name"=> "CELELE",
          "address"=> "Cra. 10C # 29 - 200",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 301 7420389",
          "link"=> "https://celelerestaurante.com/"
      ],
      [
          "name"=> "CUZCO\nPERÚ KITCHEN",
          "address"=> "Calle Santo Domingo # 33 - 48",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 56606764",
          "link"=> "https://cartagena.restaurantecuzco.com/"
      ],
      [
          "name"=> "LA ÚNICA",
          "address"=> "Cra. 8 # 38 - 47",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 317 4405086",
          "link"=> "https://www.instagram.com/launicactg/"
      ],
      [
          "name"=> "DONDE\nSOCORRO",
          "address"=> "Calle del Arsenal # 10 -39 L. 1",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 (605) 6708554",
          "link"=> "https://www.instagram.com/restaurantelacasadesocorro/"
      ],
      [
          "name"=> "CARMEN",
          "address"=> "Calle 38 # 8 - 19",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 310 3949344",
          "link"=> "https://carmencartagena.com/"
      ],
      [
          "name"=> "LA CEVICHERIA",
          "address"=> "Calle 39 # 7 - 14",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6798743",
          "link"=> "https://lacevicheriacartagena.com/"
      ],
      [
          "name"=> "CANDÉ",
          "address"=> "Calle de la Serrezuela # 39 - 02",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 (605) 6685291",
          "link"=> "https://www.instagram.com/canderestaurante/"
      ],
      [
          "name"=> "HARRY’S\nSASSON",
          "address"=> "Cra. 3 # 31 - 19",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6501015",
          "link"=> "https://www.harrysasson.com/harrys-bar-cartagena/"
      ],
      [
          "name"=> "LA COCINA\nDE PEPINA",
          "address"=> "Calle 25 # 9A - 06 L. 2",
          "city"=> "Getsemaní, Cartagena",
          "phone"=> "+57 300 8565189",
          "link"=> "https://www.instagram.com/lacocinadepepina"
      ],
      [
          "name"=> "AGUA\nDE LEÓN",
          "address"=> "Calle de Ayos # 4 - 46",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 315 2780517",
          "link"=> "https://www.instagram.com/aguadeleon_restaurante/"
      ],
      [
          "name"=> "MAR Y ZIELO",
          "address"=> "Cra. 5 # 34 - 63",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 317 6911393",
          "link"=> "https://maryzielo.com/"
      ],
      [
          "name"=> "CELELE",
          "address"=> "Cra. 10C # 29 - 200",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 301 7420389",
          "link"=> "https://celelerestaurante.com/"
      ]
    ],
  ],
  "brunchdesserts" => [
    "title" => "Brunch Desserts",
    "places" => [
      [
          "name"=> "JUAN VALDÉZ\nCAFÉ",
          "address"=> "Cra. 2 # 7 - 17",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 5 6651156",
          "link"=> "https://juanvaldez.com/"
      ],
      [
          "name"=> "MILA\nPASTELERÍA",
          "address"=> "Cl. de la Iglesia # 35 - 76",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 317 2573024",
          "link"=> "https://www.instagram.com/milapasteleria/"
      ],
      [
          "name"=> "LA PALETTERIA\nGOURMET",
          "address"=> "Cl. 35 #03 - 86 local 2",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 56661579",
          "link"=> "http=>//www.lapaletteria.co/"
      ],
      [
          "name"=> "ÉPOCA\nESPRESSO",
          "address"=> "Cra. 5 # 34 - 52",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 315 8008072",
          "link"=> "https://www.instagram.com/weare.epoca/"
      ]
    ],
  ],
  "bars" => [
    "title" => "Bars",
    "places" => [
      [
          "name"=> "CAFÉ\nHAVANA",
          "address"=> "Cra. 10 Esquina",
          "city"=> "Getsemaní, Cartagena",
          "phone"=> "+57 314 5563905",
          "link"=> "https://www.instagram.com/cafehavana_cartagena/"
      ],
      [
          "name"=> "BAZURTO",
          "address"=> "Cra. 9 # 30 - 42",
          "city"=> "Getsemaní, Cartagena",
          "phone"=> "+57 317 6481183",
          "link"=> "https://www.instagram.com/bazurtosocialclub/"
      ],
      [
          "name"=> "BUENA VIDA\nROOFTOP",
          "address"=> "Cra. 6 # 34 - 72",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 322 3061025",
          "link"=> "https://www.instagram.com/buenavidamarisqueria_/"
      ],
      [
          "name"=> "ALQUÍMICO\nBAR",
          "address"=> "Calle del Colegio # 34 - 24",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 316 5331932",
          "link"=> "https://alquimico.com/"
      ],
      [
          "name"=> "CAFÉ\nDEL MAR",
          "address"=> "Baluarte de Santo Domingo",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6642945",
          "link"=> "https://www.cafedelmarcartagena.com.co/"
      ],
      [
          "name"=> "MIRADOR\nGASTRO BAR",
          "address"=> "Cra. 7 Centro",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 322 5109747",
          "link"=> "https://www.instagram.com/miradorgastrobar/"
      ],
      [
          "name"=> "EL BALUARTE",
          "address"=> "Calle 31 Centro",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 317 5098739",
          "link"=> "https://baluartesfj.com/"
      ],
    ],
  ],
  "boutiques" => [
    "title" => "boutiques",
    "places" => [
      [
          "name"=> "AZULU",
          "address"=> "Cra. 3 # 31 - 11",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6642724",
          "link"=> "https://azulu.co/"
      ],
      [
          "name"=> "C.C. LA SERREZUELA",
          "address"=> "Cra. 11 # 39 - 21",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 (605) 6421795",
          "link"=> "https://www.plazalaserrezuela.com/"
      ],
      [
          "name"=> "MALVA",
          "address"=> "Cra. 11 # 39 - 21",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 300 3278066",
          "link"=> "https://malvaonline.com/"
      ],
      [
          "name"=> "SILVIA TCHERASSI",
          "address"=> "Calle 31 # 31 - 11",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6790051",
          "link"=> "https://www.silviatcherassi.com/co/es/tiendas/cartagena"
      ],
      [
          "name"=> "BEATRIZ CAMACHO",
          "address"=> "Calle 33 # 3 - 04",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 320 5651113",
          "link"=> "https://sofiyleo.com/cartagena/href="
      ],
      [
          "name"=> "KETTY TINOCO",
          "address"=> "Calle Balocco # 33 - 01",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 301 6287824",
          "link"=> "https://kettytinoco.com/"
      ],
      [
          "name"=> "TO RENT\nD’CLASE",
          "address"=> "Av. San Martin 5 – 84T L.201",
          "city"=> "Bocagrande, Cartagena",
          "phone"=> "+57 300 7889362",
          "link"=> "https://www.instagram.com/dclase.co/?hl=en"
      ],
      [
          "name"=> "ST. DOM",
          "address"=> "Cra. 3 # 33 - 70",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6354380",
          "link"=> "http=>//www.lurecartagena.com/st-dom/"
      ],
      [
          "name"=> "FRANCESCA MIRANDA",
          "address"=> "Calle 31 # 3 - 25",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6648821",
          "link"=> "https://www.instagram.com/francescamiranda_"
      ],
      [
          "name"=> "GORETTY MEDINA",
          "address"=> "Calle La Mantilla # 3 - 44",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 317 4368144",
          "link"=> "https://www.instagram.com/gorettymedinac/"
      ],
      [
          "name"=> "TO RENT\nGABRIEL BOUTIQUE",
          "address"=> "Cra. 2 # 9 – 148 L. 5",
          "city"=> "Bocagrande, Cartagena",
          "phone"=> "+57 (605) 6658020",
          "link"=> "https://www.instagram.com/boutiquegabriel/?hl=en"
      ],
    ],
  ],
  "beautysalons" => [
    "title" => "Beauty Salons",
    "places" => [
      [
          "name"=> "ANDRÉS\nPELUQUERÍA",
          "address"=> "Calle 25 # 9A - 06 L. 2",
          "city"=> "Getsemaní, Cartagena",
          "phone"=> "+57 300 8565189",
          "link"=> "https://sofiyleo.com/cartagena/"
      ],
      [
          "name"=> "KARLA B, LóPEZ\nMAKE UP",
          "address"=> "Calle de Ayos # 4 - 46",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 315 2780517",
          "link"=> "https://www.instagram.com/karlabrigittemakeup/"
      ],
      [
          "name"=> "MAIRA\nMAKE UP",
          "address"=> "Cra. 5 # 34 - 63",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 317 6911393",
          "link"=> "https://sofiyleo.com/cartagena/"
      ],
      [
          "name"=> "FRANKLIN\nRAMOS",
          "address"=> "Calle del Arsenal # 10 -39 L. 1",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 (605) 6708554",
          "link"=> "https://franklinramos.com/"
      ],
      [
          "name"=> "PORTADA\nPELUQUERÍA",
          "address"=> "Calle 38 # 8 - 19",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 310 3949344",
          "link"=> "https://www.instagram.com/portadapeluqueria/"
      ],
      [
          "name"=> "CARLOS\nTORRES",
          "address"=> "Calle 39 # 7 - 14",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6798743",
          "link"=> "https://www.instagram.com/carlos_torres_vargas/"
      ],
      [
          "name"=> "DIEGO\nMOYA",
          "address"=> "Calle de la Serrezuela # 39 - 02",
          "city"=> "Cartagena, Colombia",
          "phone"=> "+57 (605) 6685291",
          "link"=> "https://www.diegomoya.com/"
      ],
      [
          "name"=> "GLOSS\nPELUQUERÍA",
          "address"=> "Cra. 3 # 31 - 19",
          "city"=> "Centro Histórico, Cartagena",
          "phone"=> "+57 (605) 6501015",
          "link"=> "https://www.instagram.com/gloss_peluqueria/"
      ],
    ]
  ]
];
?>

  <main>
    <section class="sectionCartagena">
        <div class="sectionCartagena__bckg-fixed"></div>
        <div class="box text-center">
          <div class="pb-20">
            <p class="text--22">PLACES OF INTEREST</p>
            <h2 class="text--56">Sitios de Interés</h2>
          </div>
          <div class="sectionCartagena__places">
            <?php foreach ($places as $category) { ?>
              <h2 class="text--28" id="<?php echo $category['title']; ?>"><?php echo $category['title']; ?></h2>
              <div class="slick0">
                  <?php foreach ($category['places'] as $place) { ?>
                    <div>
                      <p class="text--16 padding"><?php echo $place['name']; ?></p>
                      <p class="text--11"><?php echo $place['address']; ?></p>
                      <p class="text--11 pb-11"><?php echo $place['city']; ?></p>
                      <p class="text--14 number"><?php echo $place['phone']; ?></p>
                      <a class="button button--small" href="<?php echo $place['link']; ?>" target="_blank">
                        View
                      </a>
                    </div>
                  <?php } ?>
              </div>
            <?php } ?>
          </div>
        </div>
    </section>
  </main>


<?php 
get_footer(); 
?>
