<?php 
/* 
Template Name: Places
*/
get_header(); 

$places = [
    "brunchdesserts" => [
        "id" => "desserts-brunch",
        "title" => "Desserts & Brunch",
        "title_es" => "Postres y Brunch",
        "places" => [
            [
                "name" => "MILA\nPASTELERÍA",
                "address" => "Cl. de la Iglesia # 35 - 76",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 317 2573024",
                "link" => "https://www.mila.com.co",
                "image" => IMG_BASE . 'slick-images/slick-image-1.png',
            ],
            [
                "name" => "JUAN VALDÉZ\nCAFÉ",
                "address" => "Cra. 2 # 7 - 17",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 5 6651156",
                "link" => "https://juanvaldez.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-69.png',
            ],
            [
                "name" => "ÉPOCA\nESPRESSO",
                "address" => "Cra. 5 # 34 - 52",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 315 8008072",
                "link" => "https://www.instagram.com/weare.epoca/",
                "image" => IMG_BASE . 'slick-images/slick-image-3.png',
            ],
            [
                "name" => "LA PALETTERIA\nGOURMET",
                "address" => "Cl. 35 #03 - 86 local 2",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 56661579",
                "link" => "https://www.instagram.com/lapaletteria/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-4.png',
            ],
            [
                "name" => "CAFÉ QUINDÍO",
                "address" => "C.C. La Serrezuela",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 320 6936900",
                "link" => "https://www.instagram.com/cafequindio.co/",
                "image" => IMG_BASE . 'slick-images/slick-image-5.png',
            ],
            [
                "name" => "ELY REPOSTERÍA",
                "address" => "Transversal 34 # 19 - 52",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 318 3474905",
                "link" => "https://elyreposteria.com",
                "image" => IMG_BASE . 'slick-images/slick-image-6.png',
            ],
            [
                "name" => "CAFÉ DEl MAR",
                "address" => "Baluarte de Santo Domingo",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6642945",
                "link" => "https://www.cafedelmarcartagena.com.co",
                "image" => IMG_BASE . 'slick-images/slick-image-7.png',
            ],
            [
                "name" => "CAFÉ SAN ALBERTO",
                "address" => "Cra. 3 # 35 - 18",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 318 7964457",
                "link" => "https://cafesanalberto.com.co/",
                "image" => IMG_BASE . 'slick-images/slick-image-8.png',
            ],
            [
                "name" => "EL CAFÉ ÁBACO",
                "address" => "Calle 36 # 3 - 86",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6786143",
                "link" => "https://www.abacolibros.com",
                "image" => IMG_BASE . 'slick-images/slick-image-9.png',
            ],
            [
                "name" => "LA BRIOCHE",
                "address" => "Calle 36 # 61 - 06",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 317 8830989",
                "link" => "https://www.labrioche.com.co",
                "image" => IMG_BASE . 'slick-images/slick-image-10.png',
            ],
        ],
    ],
    "placesvisit" =>[
        "id" => "places-to-visit",
        "title" => "Places to Visit",
        "title_es" => "Lugares para visitar",
        "places" => [
            [
                "name" => "murallas cartagena",
                "address" => "Fortiﬁcation that took more than a hundred years to complete, carried out in stages from 1586 to 1699, encompassing the perimeter of the center of the old city, San Diego and Getsemaní",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-11.png',
            ],
            [
                "name" => "Torre del reloj",
                "address" => "Famous gateway to the walled city, characterized by its baroque stone doorway that precedes an imposing structure.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-2.png',
            ],
            [
                "name" => "LETRERO CARTAGENA",
                "address" => "The sign is located on the road that leads to Bocagrande, the sector where most of the hotels in the city are located and where there are nice public beaches for swimming.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-13.png',
            ],
            [
                "name" => "BARRIO GETSEMANÍ",
                "address" => "It is one of the most visited places in the city. Here you find graffiti, hotels, breweries and incredible music that will undoubtedly make you come back to this place.", 
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-14.png',
            ],
            [
                "name" => "COLOMBITALIA AREPAS",
                "address" => "For these AREPAS people are lining up for hours. With a fusion of the best of Colombian and Italian cuisine, Colombitalia delights its customers with a wide variety of authentic flavors.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-15.png',
            ],
            [
                "name" => "CONVENTO SANTA CRUZ DE LA POPA",
                "address" => "The convent, cloister and chapel of Nuestra Señora de la Candelaria de la Popa are located at the top of the Popa hill in Cartagena. Crowds of devotees make a pilgrimage on foot to the top of the hill of the Popa.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-16.png',
            ],
            [
                "name" => "CASTILLO SAN FELIPE",
                "address" => "One of the most famous sites, corresponding to a castle built in the seventeenth century, work of Spanish military engineering in America.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-17.png',
            ],
            [
                "name" => "MONUMENTO DE LAS BOTAS VIEJAS",
                "address" => "Located at the base of the Castillo de San Felipe, the Monumento a los Zapatos Viejos is a giant sculpture of a pair of old boots. A popular place to take a selfie, the monument was created by Héctor Lombana Piñeres.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-18.png',
            ],
            [
                "name" => "TEAtro HERedIA",
                "address" => "Magniﬁcent eclectic-style building erected in 1902, designed by Luis Felipe Jaspe, the same architect who created the Cartagena Clock Tower.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-19.png',
            ],
            [
                "name" => "ISLAS DEL ROSARIO",
                "address" => "In the Rosario Islands you can enjoy a paradisiacal destination of beautiful white sandy beaches and the warm and crystalline waters of the Caribbean Sea. (We will be in Baru Island on July 25th!)",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-20.png',
            ],
            [
                "name" => "VOLCÁN DE LODO DEL TOTUMO",
                "address" => "It is a 15-meter-high crater with a medicinal mud pool at the top. Entering the mud crater of the volcano is quite an adventure, although it will be impossible to sink in this natural pool that seems to have no bottom.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-21.png',
            ]
        ]
    ],
    "boutiques" => [
        "id" => "malls-boutiques",
        "title" => "Malls & Boutiques",
        "title_es" => "Centros Comerciales y Boutiques",
        "places" => [
            [
                "name" => "C.C. LA SERREZUELA",
                "address" => "Cra. 11 # 39 - 21",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6421795",
                "link" => "https://laserrezuela.co",
                "image" => IMG_BASE . 'slick-images/slick-image-22.png',
            ],
            [            
                "name" => "BOCAGRANDE PLAZA MALL",
                "address" => "Cra. 1 # 12 - 118",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6421711",
                "link" => "https://plazabocagrande.com",
                "image" => IMG_BASE . 'slick-images/slick-image-23.png',
            ],

            [
                "name" => "MALLPLAZA CARTAGENA",
                "address" => "Av. Pedro De Heredia # 13",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6930073",
                "link" => "https://www.mallplaza.com/co/cartagena",
                "image" => IMG_BASE . 'slick-images/slick-image-24.png',
            ],

            [
                "name" => "C.C. PORTAL DE SAN FELIPE",
                "address" => "Calle 30 # 17 - 140",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6582693",
                "link" => "https://www.tripadvisor.co/Attraction_Review-g297476-d8513706-Reviews-Centro_Comercial_Portal_de_San_Felipe-Cartagena_Cartagena_District_Bolivar_Depart.html",
                "image" => IMG_BASE . 'slick-images/slick-image-25.png',
            ],
            [
                "name" => "MALVA",
                "address" => "Cra. 11 # 39 - 21",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 300 3278066",
                "link" => "https://malvaonline.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-26.png',
            ],
            [
                "name" => "ST. DOM",
                "address" => "Cra. 3 # 33 - 70",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6354380",
                "link" => "http://www.lurecartagena.com/st-dom/",
                "image" => IMG_BASE . 'slick-images/slick-image-27.png',
            ],
            [
                "name" => "SILVIA TCHERASSI",
                "address" => "Calle 31 # 31 - 11",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6790051",
                "link" => "https://co.silviatcherassi.com",
                "image" => IMG_BASE . 'slick-images/slick-image-28.png',
            ],
            [
                "name" => "FRANCESCA MIRANDA",
                "address" => "Calle 31 # 3 - 25",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6648821",
                "link" => "https://www.instagram.com/francescamiranda_",
                "image" => IMG_BASE . 'slick-images/slick-image-29.png',
            ],

            [
                "name" => "BEATRIZ CAMACHO",
                "address" => "Calle 33 # 3 - 04",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 320 5651113",
                "link" => "https://beatrizcamacho.com",
                "image" => IMG_BASE . 'slick-images/slick-image-30.png',
            ],
            [
                "name" => "GORETTY MEDINA",
                "address" => "Calle La Mantilla # 3 - 44",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 317 4368144",
                "link" => "https://www.instagram.com/gorettymedinac/",
                "image" => IMG_BASE . 'slick-images/slick-image-31.png',
            ],
            [
                "name" => "KETTY TINOCO",
                "address" => "Calle Balocco # 33 - 01",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 301 6287824",
                "link" => "https://kettytinoco.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-32.png',
            ],
            [
                "name" => "AZULU",
                "address" => "Cra. 3 # 31 - 11",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6642724",
                "link" => "https://azulu.co/",
                "image" => IMG_BASE . 'slick-images/slick-image-33.png',
            ],
        ],
    ],
    "hotels" => [
        "id" => "hotels",
        "title" => "Hotels",
        "title_es" => "Hoteles",
        "places" => [
            [
                "name" => "SOFITEL LEGEND\nSANTA CLARA",
                "address" => "Calle Del Torno # 39 - 29",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 5 6504700",
                "link" => "https://www.sofitellegendsantaclara.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-34.png',
            ],
            [
                "name" => "MOVICH\nHOTELS",
                "address" => "Calle Velez Danies # 4 - 39",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 5 6642995",
                "link" =>"https://www.movichhotels.com/es/hotel-movichcartagena-en-cartagena/",
                "image" => IMG_BASE . 'slick-images/slick-image-35.png',
            ],
            [
                "name" => "BASTION\nLUXURY HOTEL",
                "address" => "Calle del Sargento Mayor # 6 - 87",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6424100",
                "link" => "https://www.bastionluxuryhotel.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-36.png',
            ],
            [
                "name" => "CHARLESTON\nSANTA TERESA",
                "address" => "Cra. 7 # 34 -10",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (5) 6649494",
                "link" => "https://www.hotelcharlestonsantateresa.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-37.png',
            ],
            [
                "name" => "HOTEL\nSAN AGUSTIN",
                "address" => "Univ. de Cartagena # 36-44",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 5 6810000",
                "link" => "https://www.hotelcasasanagustin.com/es/home.html",
                "image" => IMG_BASE . 'slick-images/slick-image-38.png',
            ],
            [
                "name" => "CASA PESTAGUA",
                "address" => "Cra. 3 # 33 - 63",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6649510",
                "link" => "https://casapestagua.com",
                "image" => IMG_BASE . 'slick-images/slick-image-39.png',
            ],
            [
                "name" => "CASA\nLA MERCED",
                "address" => "Calle de Don Sancho # 36",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 5 6647727",
                "link" => "https://mustique.co/bienvenidos/casas/la-merced/",
                "image" => IMG_BASE . 'slick-images/slick-image-40.png',
            ],
            [
                "name" => "BOVEDAS DE \n SANTA CLARA",
                "address" => "Cra. 8 # 39 - 114",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6504465",
                "link" => "https://www.bovedasdesantaclara.com",
                "image" => IMG_BASE . 'slick-images/slick-image-41.png',
            ],
            [
                "name" => "NÁCAR HOTEL\nBY HILTON",
                "address" => "Calle del Curato No. 38-99",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 5 6517050",
                "link" => "https://www.hiltonhotels.com/es_XM/colombia/nacar-hotel-cartagena/",
                "image" => IMG_BASE . 'slick-images/slick-image-42.png',
            ],
            [
                "name" => "HOTEL CASA\nDON LUIS",
                "address" => "Calle del Cuartel # 36 – 16",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6930174",
                "link" => "https://www.instagram.com/hotelcasadonluis/",
                "image" => IMG_BASE . 'slick-images/slick-image-43.png',
            ],
            [
                "name" => "VOILA BY \n HUESPEDIA",
                "address" => "Calle de las Carretas # 34 - 85",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 300 9121453",
                "link" => "https://www.huespedia.com/voila-hotels-es/",
                "image" => IMG_BASE . 'slick-images/slick-image-44.png',
            ],
            [
                "name" => "HYATT\nREGENCY",
                "address" => "Cra. 1 # 12 - 118",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6941282",
                "link" => "https://www.hyatt.com/es-ES/hotel/colombia/hyatt-regency-cartagena/ctgrc",
                "image" => IMG_BASE . 'slick-images/slick-image-45.png',
            ],
            [
                "name" => "HOTEL ESTELAR",
                "address" => "Cra. 1 # 11 - 116",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6517303",
                "link" => "https://hotelesestelar.com/es/destinos/colombia/cartagena-de-indias",
                "image" => IMG_BASE . 'slick-images/slick-image-46.png',
            ],
            [
                "name" => "HOTEL\nLAS AMÉRICAS",
                "address" => "Anillo Vial, Sector Cielo Mar",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6930592",
                "link" => "https://www.hotellasamericas.com.co/",
                "image" => IMG_BASE . 'slick-images/slick-image-47.png',
            ],
        ],
    ],
    "restaurants" => [
        "id" => "restaurants",
        "title" => "Restaurants",
        "title_es" => "Restaurantes",
        "places" => [
            [
                "name" => "CANDÉ",
                "address" => "Calle de la Serrezuela # 39 - 02",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6685291",
                "link" => "https://www.instagram.com/canderestaurante/",
                "image" => IMG_BASE . 'slick-images/slick-image-48.png',
            ],
            [
                "name" => "ANDRÉS CARNE <br> DE RES",
                "address" => "Cra. 11 # 39 - 21",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "315 3559096",
                "link" => "https://www.instagram.com/andrescarnederes_cartagena/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-49.png',
            ],
            [
                "name" => "ALMA",
                "address" => "Calle San Agustín # 36",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6810050",
                "link" => "https://www.almacolombia.com",
                "image" => IMG_BASE . 'slick-images/slick-image-50.png',
            ],
            [
                "name" => "MISTURA",
                "address" => "Plaza Fernández Madrid",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6767605",
                "link" => "https://www.instagram.com/misturarestaurantebar/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-51.png',
            ],
            [
                "name" => "LA CASA DE <br> SOCORRO",
                "address" => "Frente al C.C. Getsemaní",
                "city" => "Getsemaní, Cartagena",
                "phone" => "+57 315 7186666",
                "link" => "https://www.instagram.com/restaurantelacasadesocorro/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-52.png',
            ],
            [
                "name" => "CARMEN",
                "address" => "Calle 38 # 8 - 19",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 310 3949344",
                "link" => "https://www.instagram.com/carmenrestaurante/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-53.png',
            ],
            [
                "name" => "HARRY’S\nSASSON",
                "address" => "Cra. 3 # 31 - 19",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6501015",
                "link" => "https://harrysasson.com",
                "image" => IMG_BASE . 'slick-images/slick-image-54.png',
            ],
            [
                "name" => "LA COCINA\nDE PEPINA",
                "address" => "Calle 25 # 9A - 06 L. 2",
                "city" => "Getsemaní, Cartagena",
                "phone" => "+57 300 8565189",
                "link" => "https://www.instagram.com/lacocinadepepina",
                "image" => IMG_BASE . 'slick-images/slick-image-55.png',
            ],
            [
                "name" =>"AGUA DE LEÓN",
                "address" =>"Calle de Ayos # 4 - 46",
                "city" =>"Centro Histórico, Cartagena",
                "phone" =>"+57 315 2780517",
                "link" =>"https://www.instagram.com/aguadeleonrestaurante/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-56.png',
            ],
            [
                "name" => "MAR Y ZIELO",
                "address" => "Cra. 5 # 34 - 63",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 317 6911393",
                "link" => "https://maryzielo.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-57.png',
            ],
            [
                "name" => "CELELE",
                "address" => "Cra. 10C # 29 - 200",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 301 7420389",
                "link" => "https://celelerestaurante.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-58.png',
            ],
            [
                "name" => "CUZCO",
                "address" => "Calle Santo Domingo # 33 - 48",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 56606764",
                "link" => "https://www.instagram.com/restaurantecuzco/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-59.png',
            ],
            [
                "name" => "LA VITROLA",
                "address" => "Cra. 2 # 33 - 66",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6648243",
                "link" => "https://www.instagram.com/lavitrolacartagena/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-60.png',
            ],
            [
                "name" => "MARDELEVA",
                "address" => "Nuestra Sra. del Carmen # 33 - 41",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 317 6680456",
                "link" => "https://www.instagram.com/mardelevarest/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-61.png',
            ],
        ],
    ],
    "beautysalons" => [
        "id" => "beauty-salons-barber",
        "title" => "Beauty Salons & Barber",
        "title_es" => "Peluquerías y Belleza",
        "places" => [
            [
                "name" => "PORTADA\nPELUQUERÍA",
                "address" => "Calle 38 # 8 - 19",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 310 3949344",
                "link" => "https://www.instagram.com/portadapeluqueria/",
                "image" => IMG_BASE . 'slick-images/slick-image-62.png',
            ],
            [
                "name" =>"BRIGITTE LÓPEZ",
                "address" =>"Home Delivery Service",
                "city" =>"Cartagena, Colombia",
                "phone" =>"+57 304 6744415",
                "link" =>"https://www.instagram.com/brigittelopezv/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-63.png',
            ],
            [
                "name" => "CARLOS\nTORRES",
                "address" => "Calle 39 # 7 - 14",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6798743",
                "link" => "https://www.instagram.com/carlostorres.studio10/",
                "image" => IMG_BASE . 'slick-images/slick-image-64.png',
            ],
            [
                "name" => "DIEGO\nMOYA",
                "address" => "Calle de la Serrezuela # 39 - 02",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6685291",
                "link" => "https://www.diegomoya.com/",
                "image" => IMG_BASE . 'slick-images/slick-image-65.png',
            ],
            [
                "name" => "GLOSS\nPELUQUERÍA",
                "address" => "Cra. 3 # 31 - 19",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6501015",
                "link" => "https://www.instagram.com/gloss_peluqueria/",
                "image" => IMG_BASE . 'slick-images/slick-image-66.png',
            ],
            [
                "name" => "KARLA B, LóPEZ\nMAKE UP",
                "address" => "Calle de Ayos # 4 - 46",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 315 2780517",
                "link" => "https://www.instagram.com/karlabrigittemakeup/",
                "image" => IMG_BASE . 'slick-images/slick-image-67.png',
            ],
            [
                "name" => "ANGIE CABRERA",
                "address" => "Home Delivery Service",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 301 3803447",
                "link" => "https://www.instagram.com/angiecabreramakeup/?hl=en",
                "image" => IMG_BASE . 'slick-images/slick-image-70.png',
            ],
        ],
    ],
];
?>

  <main class="section__main">
    <section class="sectionCartagena">
        <div class="sectionCartagena__bckg-fixed"></div>
        <div class="box text-center">
          <div class="pb-20">
            <p class="text--22">PLACES OF INTEREST</p>
            <h2 class="text--56">Sitios de Interés</h2>
          </div>
          <div class="sectionCartagena__places">
            <?php foreach ($places as $category) { ?>
                <h2 class="text--28" id="<?php echo $category['id']; ?>">
                    <?php echo $category['title']; ?>
                </h2>
                <p class="text--24">
                    <?php echo $category['title_es']; ?>
                </p>
              <div class="slick0">
                  <?php foreach ($category['places'] as $place) { ?>
                    <div class="sectionCartagena__card">
                        <div class="sectionCartagena__padding">
                            <?php if ($place['image']) : ?>
                            <img src="<?php echo $place['image']; ?>" alt="">
                            <?php endif?>
                            <div class="sectionCartagena__info">
        
                            <h2 class="text--24 font-hatton">
                                <?php echo $place['name']; ?>
                            </h2>
        
                            <?php if ($place['address']) : ?>
                            <p class="text--18"><?php echo $place['address']; ?></p>
                            <?php endif?>
        
                            <?php if ($place['city']) : ?>
                            <p class="text--18 pb-11"><?php echo $place['city']; ?></p>
                            <?php endif?>
        
                            <?php if ($place['phone']) : ?>
                            <p class="text--20 number" style="color: #4d4d4d"><?php echo $place['phone']; ?></p>
                            <?php endif?>
        
                            <?php if ($place['link']) : ?>
                                <a class="button button--small" href="<?php echo $place['link']; ?>" target="_blank">
                                VIEW
                                </a>
                            <?php endif?>
                            </div>
                        </div>
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
