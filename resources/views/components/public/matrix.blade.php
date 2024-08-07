<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:locale" content="es_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Limpia BnB" />
  <meta property="og:description"
    content="Transformamos tu espacio en un lugar impecable y acogedor para tus huéspedes" />
  <meta property="og:image" content="{{ asset('images/img/image_2.png') }}">
  <meta property="og:url" content="https://limpiabnb.com/" />

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="icon" href="{{ asset('images\img\limpia.svg') }}" type="image/x-icon">
  @yield('meta_keywords')


  {{-- Aqui van los CSS --}}
  @yield('css_improtados')

  {{-- Swipper --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Limpia BnB</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-579FMZ2PQW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-579FMZ2PQW');
  </script>

  <meta name="google-site-verification" content="_9JzwQMt-SlYf1GGiWISEYx6FSiUDdAQGZCqZLnkBqk" />

  <style>
    .before__underline {
      display: flex;
      flex-direction: row;
      align-items: end;
      gap: 0.5rem;
    }

    .before__underline::before {
      content: "";
      display: block;
      width: 3rem;
      height: 0.2rem;
      background: white;
    }

    .button__base {
      /* font-weight: bold; */
      font-size: 20px;
      padding: 1.2rem 2rem;
      border-radius: 6px;
      -webkit-border-radius: 6px;
      -moz-border-radius: 6px;
      -ms-border-radius: 6px;
      -o-border-radius: 6px;
      font-weight: 500;
      color: white;
    }

    .button__base-form {
      padding: 1rem 2rem;
    }

    .button__base-padding {
      padding: 0.8rem 2rem;
    }

    .text__cotizar {
      /* font-weight: 700; */
      font-size: 40px;
    }

    @media (min-width: 768px) {
      .text__cotizar {
        font-size: 48px;
      }
    }

    .text__label {
      /* font-weight: 500; */
      font-size: 16px;
    }

    @media (min-width: 768px) {
      .text__label {
        font-size: 20px;
      }
    }

    .text__input {
      padding: 0.8rem 1rem;
      border-radius: 6px;
      font-size: 16px;
      outline: none;
      -webkit-border-radius: 6px;
      -moz-border-radius: 6px;
      -ms-border-radius: 6px;
      -o-border-radius: 6px;
      border: 0.1rem solid #00395f;
    }

    @media (min-width: 768px) {
      .text__input {
        font-size: 20px;
      }
    }

    .servicios__header .swiper-slide {
      width: 100% !important;
    }

    @media (min-width: 1024px) {
      .servicios__header .swiper-slide {
        width: 20% !important;
      }
    }

    .before__underline-step::before {
      content: "";
      display: block;
      width: 3rem;
      height: 0.2rem;
      background: #bfde8e;
    }

    .before__underline-contacto::before {
      content: "";
      display: block;
      width: 3rem;
      height: 0.2rem;
      background: #0071be;
    }

    .after__underline::after {
      content: "";
      display: block;
      width: 3rem;
      height: 0.2rem;
      background: #bfde8e;
    }

    .bg__dark {
      background-image: linear-gradient(to right,
          rgba(0, 0, 0, 0.1) 0%,
          rgba(0, 0, 0, 0.3) 30%,
          rgba(0, 0, 0, 0.1) 50%,
          rgba(0, 0, 0, 0.3) 75%,
          rgba(0, 0, 0, 0.1) 100%);
    }

    /* .border-pagination {
            border-bottom: 4px solid #0071be;
        } */

    /* ---------- button next servicios ---- */

    .swiper-button-next:after {
      content: "" !important;
    }

    .swiper-button-next {
      /* background-color: #D1ECF8; */
      background-repeat: no-repeat;
      background-position: center;
      width: 60px !important;
      height: 60px;
      border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
      position: relative !important;
      /* --swiper-navigation-size: 60px; */
      background-image: url({{ asset('/images/svg/arrow-right.svg') }});
    }



    .swiper-button-prev:after {
      content: "" !important;
    }

    .swiper-button-prev {
      /* background-color: #D1ECF8; */
      background-repeat: no-repeat;
      background-position: center;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
      position: relative !important;
      /* --swiper-navigation-size: 60px; */
      background-image: url({{ asset('/images/svg/arrow-left.svg') }});
    }



    .buttonSliderServicios {
      display: flex !important;

      flex-direction: row-reverse;
      justify-content: start;
      gap: 2rem;
      height: 50px;
    }

    @media (min-width: 768px) {
      .buttonSliderServicios {
        flex-direction: row-reverse;
        justify-content: start;
      }
    }

    .swiper-button-lock {
      display: block !important;
    }

    /* ---- testimonios ---- */

    .siguiente:after {
      content: "" !important;
    }

    .siguiente {
      top: 10% !important;
    }

    /* .siguiente:hover {
            background-color: #393f53;
        } */

    .anterior:after {
      content: "" !important;
    }

    .anterior {
      top: 10% !important;
      left: 0 !important;
      margin-right: 20px;
    }

    /* .anterior:hover {
            background-color: #b0b2bd;
        } */

    .buttonSliderTestimonios {
      display: flex;
      flex-direction: row-reverse;
      justify-content: start;
      position: absolute;
      top: 0;
    }

    .testimonios .buttonSliderTestimonios {
      height: 100px;
    }

    @media (min-width: 768px) {
      .buttonSliderTestimonios {
        justify-content: end;
        position: relative;
      }
    }

    /* deslizante */

    .deslizante {
      display: flex;
      flex-direction: column;

      gap: 30px;
    }

    .deslizante li {
      list-style: none;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Progress Div Css  */

    .deslizante li .progress {
      border-radius: 50%;

      margin: 14px 0;

      width: 100%;

      position: relative;
      /* cursor: pointer; */
    }

    .progress::after {
      content: "";
      position: absolute;
      width: 5px;
      height: 189px;
      /* 210 */
      top: -150px;
      left: 23px;
      background-color: #f8f2f2;

      z-index: -1;
    }

    .one::after {
      width: 0;
      height: 0;
    }

    /* Active Css  */

    li .active::after {
      background-color: #0071be;
    }

    /* Responsive Css  */

    @media (min-width: 400px) {
      .progress::after {
        top: -158px;
      }
    }

    @media (min-width: 768px) {
      .progress::after {
        top: -160px;
      }
    }

    @media (min-width: 830px) {
      .progress::after {
        height: 210px;
      }
    }

    @media (min-width: 890px) {
      .progress::after {
        height: 240px;
        top: -190px;
      }
    }

    @media (min-width: 1133px) {
      .progress::after {
        height: 225px;
        top: -195px;
      }
    }

    @media (min-width: 1340px) {
      .progress::after {
        top: -195px;
      }
    }

    @media (min-width: 1450px) {
      .progress::after {
        height: 200px;
        top: -150px;
      }
    }

    /* ---- hamburguesa ---- */

    a,
    button {
      cursor: pointer;
    }

    .menu-list {
      position: absolute;
      top: 70px;
      /* 70px */
      right: 70px;
      width: 235px;
    }

    .navigation {
      position: fixed;
      left: -100%;
      /* -100% */
      width: 350px;
      height: 100%;
      /* background-color: #3f76bb; */
      background-color: #0071be;
      transition: 0.5s;
      -webkit-transition: 0.5s;
      -moz-transition: 0.5s;
      -ms-transition: 0.5s;
      -o-transition: 0.5s;
    }

    .navigation ul li {
      color: #fff;
      text-align: left;
      text-transform: initial;
      list-style-type: none;
      font-size: 20px;
      padding: 10px 15px;
      /* border-bottom: 1pt solid #252525; */
      font-weight: bold;
    }

    .bar {
      position: fixed;
    }

    .hamburger {
      margin-right: 30%;
      display: block;
      /*top: 5%;
    left: 95%;
    */
      width: 50px;
      height: 30px;
      transform: translateY(-50%);
      border: 0;
      background: 0 0;
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
    }

    #position {
      margin-top: 10%;
      margin-left: 85%;
    }

    .bar {
      top: 3px;
      background: white;
      width: 100%;
      height: 4px;
      transition: all 0.3s ease-in;
    }

    #bar2 {
      top: 11px;
    }

    #bar3 {
      top: 19px;
    }

    .navigation.active {
      left: 0;
    }

    .hamburger.open #bar1 {
      background-color: #fff;
      transform: rotate(45deg) translate(6px, 5px);
    }

    .hamburger.open #bar2 {
      background-color: transparent;
    }

    .hamburger.open #bar3 {
      background-color: #fff;
      transform: rotate(-45deg) translate(6px, -5px);
    }

    /* ---- progress bar --- */

    .contenedor {
      width: 100%;
    }

    @media (min-width: 768px) {
      .contenedor {
        width: 90%;
      }
    }

    .contenedor .form-outer {
      width: 100%;
      overflow: hidden;
    }

    .contenedor .form-outer form {
      display: flex;
      width: 400%;
    }

    .form-outer form .page {
      width: 25%;
      transition: margin-left 0.3s ease-in-out;
    }

    .contenedor .progress-bar {
      margin: 40px 0;
      user-select: none;
    }

    .progress-bar .step .bullet.active {
      border-color: #bfde8e;
      background: #bfde8e;
    }

    .progress-bar .step .bullet:after {
      display: block;
      content: "";
      height: 5px;
      width: 100px;
      background: #f0edee;
      position: relative;
    }

    @media (min-width: 1200px) {
      .progress-bar .step .bullet:after {
        width: 130px;
      }
    }

    @media (min-width: 1350px) {
      .progress-bar .step .bullet:after {
        width: 150px;
      }
    }

    @media (min-width: 1650px) {
      .progress-bar .step .bullet:after {
        width: 180px;
      }
    }

    @media (min-width: 1700px) {
      .progress-bar .step .bullet:after {
        width: 220px;
      }
    }

    .progress-bar .step .bullet.active:after {
      background: #bfde8e;
      transform: scaleX(0);
      transform-origin: left;
      animation: animate 0.3s linear forwards;
    }

    @keyframes animate {
      100% {
        transform: scaleX(1);
      }
    }

    .progress-bar .step:last-child .bullet:after {
      display: none;
    }

    .progress-bar .step p.active {
      color: #bfde8e;
      transition: 0.2s linear;
    }

    .progress-bar .step .check {
      position: absolute;
      left: 50%;
      top: 70%;
      font-size: 15px;
      transform: translate(-50%, -50%);
      display: none;
    }

    .progress-bar .step .check.active {
      display: block;
      color: #fff;
    }

    .button-previo::before {
      content: "";
      display: block;
      width: 50px;
      height: 50px;
      background-color: #0071be;
      background-repeat: no-repeat;
      background-position: center;
      border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
      transition: background-color 0.3s ease-in-out;
      -webkit-transition: background-color 0.3s ease-in-out;
      -moz-transition: background-color 0.3s ease-in-out;
      -ms-transition: background-color 0.3s ease-in-out;
      -o-transition: background-color 0.3s ease-in-out;
      background-image: url({{ asset('/images/svg/arrow-left.svg') }});
    }

    .button-previo:hover::before {
      background-color: rgb(59 130 246);
    }

    @font-face {
      font-family: "airbnb-500";
      src: url({{ asset('fonts/airbnbcerealmedium-webfont.woff') }}) format("woff");
      /*   src: url("fonts/airbnbcerealmedium-webfont.woff") format("woff"); */
    }

    @font-face {
      font-family: "airbnb-700";
      /* src: url("fonts/airbnbcerealbold-webfont.woff") format("woff"); */
      src: url({{ asset('fonts/airbnbcerealbold-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "airbnb-400";
      /*  src: url("fonts/airbnbcerealbook-webfont.woff") format("woff"); */
      src: url({{ asset('fonts/airbnbcerealbook-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "airbnb-300";
      /*   src: url("fonts/airbnbcereallight-webfont.woff") format("woff"); */
      src: url({{ asset('fonts/airbnbcereallight-webfont.woff') }}) format("woff");
    }
  </style>
</head>

<body>
  @include('components.public.header')

  <div>
    {{-- Aqui va el contenido de cada pagina --}}
    @yield('content')

  </div>

  @include('components.public.footer')


  @yield('scripts_improtados')

  <script>
    function alerta(message) {
      Swal.fire({
        title: message,
        icon: "error",
      });
    }

    function validarTelefono(value) {
      if (value !== '') {
        if (isNaN(value)) {
          alerta("Por favor, asegúrate de ingresar solo números en el teléfono");
          return false;
        }
      }

      if (value.length < 9) {
        alerta("El teléfono solo puede tener 9 dígitos");
        return false;
      }

      return true;
    }

    function validarEmail(value) {
      const regex =
        /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

      if (!regex.test(value)) {
        alerta("Por favor, asegúrate de ingresar una dirección de correo electrónico válida");
        return false;
      }
      return true;
    }
  </script>

</body>

</html>
