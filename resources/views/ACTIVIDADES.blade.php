@extends("menu")

@section("titulo","Leoncio Prado - ACTIVIDADES")

@section("contenido")

<meta name="keywords" content="">
<link rel="stylesheet" href="{{ asset('/css/ACTIVIDADES.css') }}" media="screen">



<section class="u-clearfix u-section-1" id="sec-6ee9">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

    <section class="u-clearfix u-section-2" id="sec-bf26">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-expanded-width u-image u-image-default u-image-1" src="/images/FRANJA1.jpg" alt="" data-image-width="1431" data-image-height="390">
            <a  id="ver-mas-btn-1" class="u-border-2 u-border-white u-btn u-btn-round u-button-style u-custom-font u-font-montserrat u-hover-white u-none u-radius-30 u-text-hover-white u-text-white u-btn-1">VER MÁS</a>
          </div>
        </div>
      </div>
    </section>

<section id="carousel_283">

    <section class="u-clearfix u-section-3" id="carousel_2835">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-expanded-width u-image u-image-1" src="/images/futbol1.png" data-image-width="2868" data-image-height="1416">
          </div>
        </div>
      </div>
    </section>


    <section class="u-clearfix u-section-4" id="carousel_63fe">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-custom-font u-font-montserrat u-text u-text-1">
              <span style="font-weight: 700;"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy&nbsp;</span>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
              <br>
              <span style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</span>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_f1ba">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-expanded-width u-image u-image-1" src="/images/futbol2.png" data-image-width="2868" data-image-height="1404">
          </div>
        </div>
      </div>
    </section>
</section>

<script>
  // Obtener el elemento del botón "VER MÁS"
  var verMasBtn1 = document.getElementById("ver-mas-btn-1");

  // Obtener la sección con la información adicional
  var seccionInformacion1 = document.getElementById("carousel_283");

  // Agregar un controlador de eventos de clic al botón
  verMasBtn1.addEventListener("click", function(event) {
    event.preventDefault(); // Evitar que el enlace se comporte como un enlace normal

    // Alternar la visibilidad de la sección
    if (seccionInformacion1.style.display === "block") {
      seccionInformacion1.style.display = "none";
    } else {
      seccionInformacion1.style.display = "block";
    }
  });
</script>




    <section class="u-clearfix u-section-6" id="carousel_367e">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-expanded-width u-image u-image-default u-image-1" src="/images/FRANJA2.jpg" alt="" data-image-width="1431" data-image-height="389">
            <a id="ver-mas-btn-2" class="u-border-2 u-border-white u-btn u-btn-round u-button-style u-custom-font u-font-montserrat u-hover-white u-none u-radius-30 u-text-hover-white u-text-white u-btn-1">VER MÁS</a>
          </div>
        </div>
      </div>
    </section>

    <section id="carousel_36">

    <section class="u-clearfix u-section-7" id="carousel_8ce2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-expanded-width u-image u-image-1" src="/images/voley.png" data-image-width="2872" data-image-height="1406">
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-8" id="carousel_f684">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-custom-font u-font-montserrat u-text u-text-1">
              <span style="font-weight: 700;"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy&nbsp;</span>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
              <br>
              <span style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</span>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
            </p>
          </div>
        </div>
      </div>
    </section>
    </section>

    <script>
  // Obtener el elemento del botón "VER MÁS"
  var verMasBtn2 = document.getElementById("ver-mas-btn-2");
  // Obtener la sección con la información adicional
  var seccionInformacion2 = document.getElementById("carousel_36");

  // Agregar un controlador de eventos de clic al botón
  verMasBtn2.addEventListener("click", function(event) {
    event.preventDefault(); // Evitar que el enlace se comporte como un enlace normal

    // Alternar la visibilidad de la sección
    if (seccionInformacion2.style.display === "block") {
      seccionInformacion2.style.display = "none";
    } else {
      seccionInformacion2.style.display = "block";
    }
  });
</script>







    <section class="u-clearfix u-section-9" id="carousel_6b3f">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-expanded-width u-image u-image-default u-image-1" src="/images/FRANJA3.jpg" alt="" data-image-width="1431" data-image-height="387">
            <a id="ver-mas-btn-3" class="u-border-2 u-border-white u-btn u-btn-round u-button-style u-custom-font u-font-montserrat u-hover-white u-none u-radius-30 u-text-hover-white u-text-white u-btn-1">VER MÁS</a>
          </div>
        </div>
      </div>
    </section>

    <section id="carousel_3">

    <section class="u-clearfix u-section-10" id="carousel_e7e3">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-expanded-width u-image u-image-1" src="/images/atletismo.png" data-image-width="2866" data-image-height="1412">
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-11" id="carousel_04d5">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-custom-font u-font-montserrat u-text u-text-1">
              <span style="font-weight: 700;"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy&nbsp;</span>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
              <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
            </p>
          </div>
        </div>
      </div>
    </section>
  </section>

  <script>
  // Obtener el botón "VER MÁS"
  var verMasBtn3 = document.getElementById("ver-mas-btn-3");

  // Obtener la sección con la información adicional
  var seccionInformacion3 = document.getElementById("carousel_3");

  // Agregar un controlador de eventos de clic al botón
  verMasBtn3.addEventListener("click", function(event) {
    event.preventDefault(); // Evitar que el enlace se comporte como un enlace normal

    // Alternar la visibilidad de la sección
    if (seccionInformacion3.style.display === "block") {
      seccionInformacion3.style.display = "none";
    } else {
      seccionInformacion3.style.display = "block";
    }
  });
</script>









    <section class="u-clearfix u-section-12" id="sec-7e24">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="/images/marcas.png" alt="" data-image-width="1802" data-image-height="237">
      </div>
    </section>
    <section class="u-clearfix u-custom-color-8 u-section-13" id="sec-7f0b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20-sm u-size-20-xl u-size-20-xs u-size-21-lg u-size-21-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-image u-image-contain u-image-default u-image-1" src="/images/logoblanco.png" alt="" data-image-width="8397" data-image-height="9277">
                  <p class="u-hidden-md u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-1">Pagina Oficial&nbsp; de Aelu Club Social Deportivo Cultural Leoncio Prado</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-16-lg u-size-16-md u-size-17-xl u-size-20-sm u-size-20-xs u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h5 class="u-align-left u-custom-font u-font-montserrat u-text u-text-2">SÍGUENOS<span style="font-weight: 700;">
                      <span style="font-weight: 400;"></span>
                    </span>
                  </h5>
                  <div class="u-social-icons u-spacing-20 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/CSDCLeoncioPrado?mibextid=ZbWKwL"><span class="u-file-icon u-icon u-social-facebook u-social-icon u-text-white u-icon-1"><img src="/images/1077042-43d786b9.png" alt=""></span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/club_leoncio_prado/?igshid=YmMyMTA2M2Y%3D"><span class="u-file-icon u-icon u-social-icon u-social-instagram u-text-white u-icon-2"><img src="/images/747374-2bde5db4.png" alt=""></span>
                    </a>
                  </div>
                  <p class="u-align-right u-text u-text-3">Términos legales</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20-sm u-size-20-xs u-size-23-lg u-size-23-md u-size-23-xl u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <h5 class="u-align-left u-custom-font u-font-montserrat u-hidden-xs u-text u-text-4">Si tienes​ dudas, comunícate con nosotros al Whatsapp para cualquier consulta</h5>
                  <div class="u-social-icons u-spacing-20 u-social-icons-2">
                    <a class="u-social-url" target="_blank" data-type="Custom" title="linkedin"><span class="u-file-icon u-icon u-social-custom u-social-icon u-text-white u-icon-3"><img id="whatsapp-image3" src="/images/154858-634b1420.png" alt="WhatsApp"></span>
                    </a>
                  </div>
                  <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-5">932 432 844</h5>
                  <p class="u-align-left u-hidden-xs u-text u-text-6">Contáctenos</p>
                  <p class="u-align-left u-text u-text-7">Política de Privacidad</p>
                  <p class="u-align-center u-hidden-sm u-hidden-xs u-text u-text-8">Cookies</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-section-14" id="sec-57e7" data-image-width="4130" data-image-height="260">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
  </section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 300px; padding: 15px;" class="u-back-to-top u-custom-color-6 u-file-icon u-flip-vertical u-icon u-icon-circle u-opacity u-opacity-85 u-text-white" data-href="#"><img src="/images/4e7052b7.png" alt=""></span>

  <script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("whatsapp-image3").addEventListener("click", function() {
      var telefono = "932432844"; // Número de teléfono para la conversación de WhatsApp
      var url = "https://wa.me/" + telefono;
      window.open(url, "_blank");
    });
  });
</script>

    </body>

</html>

@endsection