<?php 
/* 
Template Name: Faqs
*/
get_header();

$faqs = [
    [
        'question' => 'Do I need a visa to travel to Colombia?',
        'answer' => 'Citizens of the United States, Canada, and several other countries, do not require a tourist visa for travel to Colombia if staying less than 90 days. You need a current passport valid for at least six months after your intended return date. If your passport expires before February 15, 2025, you need to renew it before traveling. Renew your passport well in advance as it can take weeks to obtain.'
    ],
    [
        'question' => '¿Necesito una visa para viajar a Colombia?',
        'answer' => 'Los ciudadanos de los Estados Unidos, Canadá, y varios países más, no requieren visa de turista para viajar a Colombia si la estancia es de menos de 90 días. Necesitas un pasaporte vigente por al menos seis meses después de la fecha de tu regreso. Si tu pasaporte vence antes del 15 de febrero de 2025, debes renovarlo antes de viajar. Renueva tu pasaporte con suficiente anticipación ya que puede demorar semanas en obtenerse.'
    ],
    [
        'question' => 'Are there any special vaccination requirements to travel to Colombia?',
        'answer' => 'There are no vaccination requirements for US citizens traveling to Colombia. If you are traveling from Brazil, you must have the International Certificate of Vaccination or Prophylaxis (ICVP) to prove that you have been vaccinated against yellow fever.'
    ],
    [
        'question' => '¿Hay algún requisito de vacunación especial para viajar a Colombia?',
        'answer' => 'No hay requisitos de vacunación para los ciudadanos de USA que viajan a Colombia. Si viajas desde Brasil, debes tener el Certificado Internacional de Vacunación o Profilaxis (CIVP) para demostrar que has sido vacunado contra la fiebre amarilla.'
    ],
    [
        'question' => 'Are there any special protocols to travel to Colombia?',
        'answer' => 'Yes. You must fill out a Check-Mig form 24 hours before your departure and prior to an online check-in. Check-Mig is a mandatory form that needs to be filled out by travelers entering or leaving Colombia. It\'s used to expedite immigration procedures and ensure health and safety protocols are followed. You DO NOT need to pay for this form as it is free to fill out online. Please follow this link to complete the form: https://apps.migracioncolombia.gov.co/pre-registro'
    ],
    [
        'question' => '¿Existe algún protocolo especial para viajar a Colombia?',
        'answer' => 'Sí. Debes llenar el formulario Check-Mig 24 horas antes de tu salida y antes de hacer un check-in en línea. Check-Mig es un formulario obligatorio que debe ser completado por los viajeros que ingresan o salen de Colombia. Se utiliza para agilizar los procedimientos de inmigración y garantizar que se sigan los protocolos de salud y seguridad. NO necesitas pagar por este formulario. Es gratuito y se debe llenar en línea. Por favor, sigue este enlace para completar el formulario: https://apps.migracioncolombia.gov.co/pre-registro'
    ],
    [
        'question' => 'What is the dress code for the wedding?',
        'answer' => 'The dress code is formal. Women should wear formal gowns and avoid white, ivory, or light pink. Men should wear a formal suit and tie/bowtie and avoid white, ivory, or light grey.'
    ],
    [
        'question' => '¿Cuál es el código de vestimenta para la boda?',
        'answer' => 'El código de vestimenta es formal. Las mujeres deben usar vestidos formales y evitar usar los colores blanco, marfil o rosado claro. Los hombres deben usar traje formal y corbata/corbatín y evitar los colores blanco, marfil o gris claro.'
    ],
    [
        'question' => 'What will the weather be like in Cartagena this time of year?',
        'answer' => 'Cartagena is always warm and humid, with temperatures typically between 80-90°F. July isn\'t a heavy rain season, but occasional tropical showers are common. Prepare for hot weather!'
    ],
    [
        'question' => '¿Cómo estará el clima en Cartagena en esta época del año?',
        'answer' => 'Cartagena siempre es cálida y húmeda, con temperaturas típicamente entre 80-90°F (27-32°C). Julio no es una temporada de lluvias intensas, pero son comunes las lluvias tropicales ocasionales. ¡Prepárate para el clima caluroso!'
    ],
    [
        'question' => 'Are kids welcome at the wedding? Can I bring my own nanny?',
        'answer' => 'Yes, children are welcome. There will be a complimentary nanny service during the reception with a space for children to rest and be entertained safely. If your little ones get restless during the ceremony we will have our wedding planning team assist you. Yes, you are welcome to bring your own nanny. Please keep in mind that they will not be accommodated in the main seating area during the reception. All nannies, whether provided by the groom and bride or by the guests, will be accommodated in the kids room and they will be provided dinner. Please provide our concierge your nanny\'s full name so we can add them to our list.'
    ],
    [
        'question' => '¿Son bienvenidos los niños en la boda? ¿Puedo llevar a mi propia niñera?',
        'answer' => 'Sí, los niños son bienvenidos. Habrá un servicio de niñera de cortesía durante la recepción con un espacio para que los niños descansen y se entretengan de una manera segura. Si tu pequeñito/a se inquieta durante la ceremonia, nuestro equipo de planeación te asistirá. Sí, puedes traer tu propia niñera. Ten en cuenta que no será acomodada en el área principal de asientos durante la recepción. Todas las niñeras, ya sean proporcionadas por los novios o por los invitados, serán acomodadas en el salón de niños y se les dará cena. Por favor, dale a nuestra conserje el nombre completo de tu niñera para que podamos añadirla a nuestra lista.'
    ],
    [
        'question' => 'Will the ceremony and reception be indoors or outdoors?',
        'answer' => 'The ceremony will be held indoors at the Catedral de Santa Catalina de Alejandría. The welcome hour will be outdoors on the balcony overlooking the ocean at the Cartagena Convention Center. The reception will be indoors at the Claustro de Las Ánimas ballroom inside the Cartagena Convention Center, with access to the ocean view terrace.'
    ],
    [
        'question' => '¿La ceremonia y la recepción serán en espacios cerrados o al aire libre?',
        'answer' => 'La ceremonia será dentro de la Catedral de Santa Catalina de Alejandría. La hora de bienvenida será al aire libre en el balcón con vista al mar del Centro de Convenciones de Cartagena. La recepción será en el salón Claustro de Las Ánimas dentro del Centro de Convenciones de Cartagena, con acceso a la terraza con vista al mar.'
    ],
    [
        'question' => 'Is smoking allowed at the wedding?',
        'answer' => 'There will be a designated smoking area outside on the terrace during the reception, away from the main activity area to protect non-smokers and children from fumes.'
    ],
    [
        'question' => '¿Se permite fumar en la boda?',
        'answer' => 'Habrá una zona designada para fumar en la terraza durante la recepción, lejos del área principal de actividades para proteger a los que no fuman y a los niños de los humos.'
    ],
    [
        'question' => 'What time should I arrive for the ceremony?',
        'answer' => 'Please arrive by 2:30 PM. The ceremony starts at 3 PM sharp and we want you to prepare for a timely arrival to avoid disrupting the bride\'s entrance.'
    ],
    [
        'question' => '¿A qué hora debo llegar a la ceremonia?',
        'answer' => 'Por favor, llega a las 2:30 PM. La ceremonia comienza a las 3 PM en punto y queremos que te prepares para llegar a tiempo y no interrumpir la entrada de la novia.'
    ],
    [
        'question' => 'What will take place after the ceremony?',
        'answer' => 'After the ceremony, the wedding party will take photos for about 45 minutes. Guests will be shuttled to the Convention Center for the reception, where appetizers and beverages will be served.'
    ],
    [
        'question' => '¿Qué pasará después de la ceremonia?',
        'answer' => 'Después de la ceremonia, el cortejo nupcial se tomará fotos durante aproximadamente 45 minutos. Los invitados serán trasladados al Centro de Convenciones para la recepción, donde se servirán aperitivos y bebidas.'
    ],
    [
        'question' => 'When is the RSVP deadline for the wedding?',
        'answer' => 'Please RSVP online for all of the wedding events by July 1, 2024.'
    ],
    [
        'question' => '¿Cuál es la fecha límite para confirmar la asistencia (RSVP) para la boda?',
        'answer' => 'Por favor, confirma tu asistencia a los eventos en línea antes del 1 de julio, 2024.'
    ],
    [
        'question' => 'Can I bring a date to the wedding?',
        'answer' => 'Please check your invitation for an additional guest. The wedding is strictly adults-only, and we request that you do not bring uninvited guests to the event.'
    ],
    [
        'question' => '¿Puedo llevar una pareja a la boda?',
        'answer' => 'Por favor, revisa tu invitación para un invitado adicional. La boda es estrictamente para adultos y te pedimos que no traigas invitados no invitados al evento.'
    ],
    [
        'question' => 'How can I share any photos taken during the wedding or at the other events? Do you have a wedding hashtag?',
        'answer' => 'We will have a QR code that you can scan to upload any photos you take and would like to share with the bride and groom. Please use this! The bride loves any and all photos! We also have a wedding hashtag that you can use, when sharing and uploading pics to your social media platforms. Please use our hashtag: #LaloandAna2024'
    ],
    [
        'question' => '¿Como puedo compartir fotos que tome en la boda o durante los otros eventos? Tienen un hashtag para la boda?',
        'answer' => 'Tendremos un código QR que puedes escanear para subir cualquier foto que tomes y que te gustaría compartir con los novios. ¡Por favor, úsenlo! A la novia le encantan todas las fotos. También tenemos un hashtag de la boda que puedes usar al compartir y subir fotos en tus plataformas de redes sociales. Por favor, usa nuestro hashtag: #LaloandAna2024'
    ],
    [
        'question' => 'Do you have a gift registry?',
        'answer' => 'Our best gift is your company! For those who still wish to honor us with a token of love, we have provided a link to the gift registry on our website for your convenience. We also absolutely love cards and words of love! We will have a box for those at the reception!'
    ],
    [
        'question' => '¿Tienen un registro de regalos para la boda?',
        'answer' => '¡Nuestro mejor regalo es tu compañía! Si deseas tener un detalle con nosotros, hemos incluido un enlace al registro de regalos en nuestra página web para tu conveniencia. También nos encantan las tarjetas y las palabras de cariño. ¡Tendremos una cajita para estas en la recepción!'
    ],
    [
        'question' => 'What if I have a dietary restriction?',
        'answer' => 'Please inform us of any dietary restrictions when you RSVP to ensure your safety and comfort.'
    ],
    [
        'question' => '¿Qué pasa si tengo una restricción alimenticia?',
        'answer' => 'Por favor informarnos sobre cualquier restricción alimenticia cuando confirmes tu asistencia (RSVP) para asegurar tu comodidad y seguridad.'
    ],
    [
        'question' => 'If I\'m not a Colombian citizen or resident, do I still have to pay the 19% IVA tax?',
        'answer' => 'If you are not a Colombian citizen or resident, you do not have to pay the 19% IVA tax. If any tax is paid, ask for an electronic receipt which should be filled out with your full name and passport number. You can receive reimbursement for any IVA paid by presenting these electronic receipts at the designated airport point for tax refunds. In Cartagena, refunds can be retrieved at the IVA booth right next to the international departures entrance.'
    ],
    [
        'question' => 'Si no soy ciudadano o residente colombiano, ¿debo pagar el impuesto IVA del 19%?',
        'answer' => 'Si no eres ciudadano o residente colombiano, no tienes que pagar el impuesto IVA del 19%. Si pagas algún impuesto, pide una copia electrónica de tu compra la cual debe llevar tu nombre completo y número de pasaporte. Guarda el recibo y podrás recibir un reembolso en el punto designado del aeropuerto para la devolución de impuestos. El reembolso en Cartagena se puede obtener en el módulo de IVA junto a la entrada de salidas internacionales.'
    ],
    [
        'question' => 'What transportation options are available from the airport to the hotel?',
        'answer' => 'There are several transportation options from the airport to the hotel. You can take a taxi or use a ride-sharing service like Uber or Cabify, which are safe and reliable in Cartagena.'
    ],
    [
        'question' => '¿Qué opciones de transporte hay desde el aeropuerto al hotel?',
        'answer' => 'Hay varias opciones de transporte desde el aeropuerto al hotel. Puedes tomar un taxi o utilizar un servicio de transporte compartido como Uber o Cabify, que son seguros y confiables en Cartagena.'
    ],
    [
        'question' => 'What is the currency exchange rate, and is it best to use a credit card, buy foreign currency ahead of time, or exchange cash upon arrival?',
        'answer' => 'We highly recommend using a credit card with no international fees for purchases as most establishments accept cards as a form of payment. The currency exchange rate is presently fluctuating between $3,800 - $3,900 pesos for every dollar. We advise people to speak with their respective financial institution to inquire about any domestic exchange services. ATMs, banks, and exchange services are also available throughout Cartagena for your convenience.'
    ],
    [
        'question' => '¿Cuál es la tasa de cambio de moneda? Es mejor usar una tarjeta de crédito, cambiar efectivo con anticipación o cambiar efectivo al llegar?',
        'answer' => 'Recomendamos usar una tarjeta de crédito sin tarifas internacionales para compras, ya que la mayoría de los establecimientos aceptan tarjetas como forma de pago. La tasa de cambio fluctúa constantemente y en este momento está entre $3,800 - $3,900 pesos por cada dólar. Aconsejamos a las personas que hablen con su respectiva institución financiera para informarse sobre los servicios de cambio domésticos. Cajeros automáticos, bancos y servicios de cambio están disponibles en toda Cartagena para tu conveniencia.'
    ],
    [
        'question' => 'What is the best way to communicate with others while in Colombia if you are traveling from abroad?',
        'answer' => 'Options include international phone plans, purchasing a local SIM card, or using apps like WhatsApp for communication.'
    ],
    [
        'question' => '¿Cuál es la mejor manera de comunicarse con los demás si viajo desde el extranjero a Cartagena?',
        'answer' => 'Las opciones incluyen planes telefónicos internacionales, comprar una tarjeta SIM local o usar aplicaciones como WhatsApp para comunicarse.'
    ],
    [
        'question' => 'Will there be assistance for the elderly and children at the wedding?',
        'answer' => 'Yes, there will be assistance for elders and a dedicated nanny service for kids during the ceremony and reception.'
    ],
    [
        'question' => '¿Habrá asistencia para las personas de la tercera edad y para los niños en la boda?',
        'answer' => 'Sí. Habrá asistencia para las personas de la tercera edad y un servicio de niñera dedicado para los niños durante la ceremonia y la recepción.'
    ],
    [
        'question' => 'Do people in Colombia speak English?',
        'answer' => 'While Spanish is the official language, many people in tourist areas speak English. Basic Spanish phrases can be helpful.'
    ],
    [
        'question' => '¿Las personas en Colombia hablan inglés?',
        'answer' => 'Aunque el español es el idioma oficial, muchas personas en áreas turísticas hablan inglés. Algunas frases básicas en español pueden ser útiles.'
    ],
    [
        'question' => 'Are tips expected in Colombia?',
        'answer' => 'Tipping is appreciated but not mandatory. At most restaurants, a 10% optional service charge is often included in the bill. Tips for good service are customary.'
    ],
    [
        'question' => '¿Se esperan propinas en Colombia?',
        'answer' => 'Las propinas son bien recibidas pero no obligatorias. En muchos restaurantes, se incluye un cargo voluntario por servicio del 10% en la cuenta. Las propinas por el buen servicio son habituales.'
    ],
    [
        'question' => 'Are all credit cards accepted in Colombia?',
        'answer' => 'Major credit cards like Visa, Mastercard, and American Express are widely accepted, but it\'s good to carry some cash for smaller establishments. We recommend bringing a travel credit card as to not incur fees from your banking institution.'
    ],
    [
        'question' => '¿Se aceptan todas las tarjetas de crédito en Colombia?',
        'answer' => 'Las tarjetas de crédito más comunes como Visa, Mastercard, y American Express son aceptadas, pero es bueno llevar algo de efectivo para los establecimientos más pequeños. Recomendamos que uses una tarjeta de crédito sin tarifas internacionales para evitar cargos adicionales por parte de tu institución bancaria.'
    ],
    [
        'question' => 'Are there any safety guidelines I should follow in Colombia?',
        'answer' => 'Cartagena is a very safe place, especially in the historic city center where the wedding will take place. As a general rule of thumb, be aware of your surroundings.'
    ],
    [
        'question' => '¿Hay alguna guía de seguridad que deba seguir en Colombia?',
        'answer' => 'Cartagena es una ciudad muy segura, especialmente en el centro histórico donde será la boda. Como regla general, mantente atento de tus alrededores.'
    ],
    [
        'question' => 'What should I expect upon arrival at the airport in Colombia?',
        'answer' => 'Upon arrival, follow signs for immigration and customs. Have your passport and any required forms ready. Transportation options to your accommodation will be available at the airport. We recommend downloading the Uber app as it allows you to pay with a credit card. Taxis only accept cash. Please advise our wedding planning team if you\'d like to arrange transportation ahead of time.'
    ],
    [
        'question' => '¿Qué debo esperar al llegar al aeropuerto en Colombia?',
        'answer' => 'Al llegar, sigue las señales para inmigración y aduanas. Ten tu pasaporte y cualquier formulario requerido listo. Las opciones de transporte hacia tu alojamiento estarán disponibles en el aeropuerto. Recomendamos descargar la aplicación de Uber ya que te permite pagar con tarjeta de crédito. Los taxis solo aceptan efectivo. Informa a nuestro equipo de planeación si deseas organizar tu transporte con anticipación.'
    ],
    [
        'question' => 'Who can I contact with any additional questions about the wedding?',
        'answer' => 'Our wedding planning team, Aqua Bodas & Eventos, is here to assist you with any questions, inquiries, or planning advice! Our wedding planner, Marcela Blanco, along with our wedding concierges, Cristina and Zule, will handle all confirmations and assist our wedding guests. Our concierges are bilingual and they can be reached at +57 311 7762486 via phone/WhatsApp or at concierge@eduardoyanamaria.com via email. Please do not hesitate to contact them for any assistance needed!'
    ],
    [
        'question' => '¿Con quién puedo comunicarme si tengo preguntas adicionales sobre la boda?',
        'answer' => 'Nuestro equipo de planeacion, Aqua Bodas & Eventos, está aquí para asistirte con cualquier pregunta, consulta o consejo con tus planes! Nuestra wedding planner, Marcela Blanco, junto con nuestras conserjes de bodas, Cristina y Zule, se encargarán de todas las confirmaciones y de asistir a nuestros invitados. Nuestras conserjes son bilingües y pueden ser contactadas al +57 311 7762486 por teléfono/WhatsApp o por correo electronico a concierge@eduardoyanamaria.com ¡No dudes en contactarlas para cualquier asistencia que necesites!'
    ]
]

?>

<main class="section__main">
    <section class="sectionRSVP">
        <div class="sectionRSVP__bckg-fixed"></div>
        <div class="box text-center">
            <div class="sectionRSVP__faqs" id="faqs">
                <p class="text--22">F.A.Q.S.</p>
                <h2 class="text--56 pb-48">Preguntas Frecuentes</h2>
                <?php foreach ($faqs as $key => $faq) { ?>
                    <div>
                        <?php if ($key % 2 == 0) { ?>
                            <button type="button" class="accordion-link text--16" data-tab="question<?php echo $key; ?>"><?php echo ($key / 2) + 1; ?>. 
                                <?php echo $faq['question']; ?>
                                <?php 
                                    $icon_name = 'icon-arrow';
                                    get_template_part('template-parts/content', 'icono');
                                    display_icon($icon_name); 
                                ?>
                            </button>
                        <?php } else { ?>
                            <button type="button" class="accordion-link text--16" data-tab="question<?php echo $key; ?>">
                                <?php echo $faq['question']; ?>
                                <?php 
                                    $icon_name = 'icon-arrow';
                                    get_template_part('template-parts/content', 'icono');
                                    display_icon($icon_name); 
                                ?>
                            </button>
                        <?php } ?>
                        <div class="accordion-content" id="question<?php echo $key; ?>">
                            <p class="text--18 pb-30"><?php echo $faq['answer']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>


<?php get_footer();