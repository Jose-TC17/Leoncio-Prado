<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="QUIÉNES SOMOS, 0 - 2, VS, CON NOSOTROSREFIRZARÁSTU TALENTO, NOTICIAS">
  <meta name="description" content="">
  <title> @yield("titulo", "Leoncio Prado")</title>
  <link rel="stylesheet" href="{{ asset('/css/page.css') }}" media="screen"> 
 
  <script class="u-script" type="text/javascript" src="/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="/page.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo1listo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="INICIO">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="es">
  <header class="u-box-shadow u-clearfix u-gradient u-header u-header" id="sec-a19e">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="/" class="u-image u-logo u-image-1" data-image-width="240" data-image-height="87"
        title="INICIO">
        <img src="/images/logo1listo.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
        <div class="menu-collapse u-custom-font u-font-montserrat"
          style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
          <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white"
            href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>

        <!-- pc -->

        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-font-montserrat u-nav u-spacing-2 u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-active-custom-color-6 u-button-style u-hover-custom-color-6 u-nav-link u-radius-50 u-text-white"
                href="/" style="padding: 10px 20px;">INICIO</a>
            </li>
            <li class="u-nav-item"><a
                class="u-active-custom-color-6 u-button-style u-hover-custom-color-6 u-nav-link u-radius-50 u-text-white"
                href="/noticias" style="padding: 10px 20px;">NOTICIAS</a>
            </li>
            <li class="u-nav-item"><a
                class="u-active-custom-color-6 u-button-style u-hover-custom-color-6 u-nav-link u-radius-50 u-text-white"
                href="/academias" style="padding: 10px 20px;">ACADEMIAS</a>
            </li>
            <li class="u-nav-item"><a
                class="u-active-custom-color-6 u-button-style u-hover-custom-color-6 u-nav-link u-radius-50 u-text-white"
                href="/actividades" style="padding: 10px 20px;">ACTIVIDADES</a>
            </li>
            <li class="u-nav-item"><a
                class="u-active-custom-color-6 u-button-style u-hover-custom-color-6 u-nav-link u-radius-50 u-text-white"
                href="/tienda" style="padding: 10px 20px;">TIENDA</a>
            </li>

            <li class="u-nav-item"><a
                class="u-active-custom-color-6 u-button-style u-hover-custom-color-6 u-nav-link u-radius-50 u-text-white"
                href="/productos" style="padding: 10px 20px;">Productos</a>
            </li>
            <li class="u-nav-item"><a
                class="u-active-custom-color-6 u-button-style u-hover-custom-color-6 u-nav-link u-radius-50 u-text-white"
                href="/login" style="padding: 10px 20px;">Admin</a>
            </li>

          </ul>
        </div>
        
        <!-- movil -->

        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-container-style u-custom-color-3 u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul
                class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-font-montserrat u-nav u-popupmenu-items u-spacing-10 u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/">INICIO</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/noticias">NOTICIAS</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/academias">ACADEMIAS</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/actividades">ACTIVIDADES</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/tienda">TIENDA</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/productos">Productos</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/login">Admin</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-custom-color-5 u-menu-overlay u-opacity u-opacity-80"></div>
        </div>
      </nav><span class="u-file-icon u-icon u-text-white u-icon-1" data-href="/" data-target="_blank">
        <img id="whatsapp-image"
          src="/images/3670025-701d7cc0.png" alt="WhatsApp"></span>
    </div>


    

    <script>
  window.watsonAssistantChatOptions = {
    integrationID: "53fcd957-fa82-432f-81e4-780511bb7b53", // The ID of this integration.
    region: "us-south", // The region your integration is hosted in.
    serviceInstanceID: "fcbde990-b14c-4dfa-82e9-d7fe298e5cbf", // The ID of your service instance.
    onLoad: function(instance) { instance.render(); }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("whatsapp-image").addEventListener("click", function() {
      var telefono = "932432844"; // Número de teléfono para la conversación de WhatsApp
      var url = "https://wa.me/" + telefono;
      window.open(url, "_blank");
    });
  });
</script>

  </header>
@yield("contenido")