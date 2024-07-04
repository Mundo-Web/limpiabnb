@extends('components.public.matrix')

@section('css_improtados')

  <style>
    .bg__image-main {
      background-image: url({{ asset('images/img/imagen_27.png') }});
    }

    .gridBienvenida {
      margin-top: 50%
    }

    @media (min-width: 768px) {
      .gridBienvenida {
        margin-top: 0%
      }

      .bg__image-main {
        background-image: url({{ asset('images/img/image_1.png') }});
      }

      .bienvenidaSection {
        max-height: 1131px;

      }
    }
  </style>

@stop
@php

  $route = resource_path('views/pages/sliders/databienvenido.json');
  $file = file_get_contents($route);
  $archivoArray = json_decode($file, true);

  // Convertir el array en un objeto
  $archivoObjeto = (object) $archivoArray;

@endphp
@php
  $route2 = resource_path('views/pages/pasoApaso/dataPasoaPaso.json');
  $file2 = file_get_contents($route2);
  $archivoArrayPasoaPaso = json_decode($file2, true);

  // Convertir el array en un objeto
  $archivoPasoaPaso = (object) $archivoArrayPasoaPaso;

@endphp
@php

  $routetest = resource_path('views/pages/testimonies/testimonios.json');
  $fileTEst = file_get_contents($routetest);
  $archivoArrayTest = json_decode($fileTEst, true);

  // Convertir el array en un objeto
  $archivoTesti = (object) $archivoArrayTest;

@endphp
@php

  $routeContact = resource_path('views/pages/contacto/contacto.json');
  $fileContacto = file_get_contents($routeContact);
  $archivoArrayConctac = json_decode($fileContacto, true);

  // Convertir el array en un objeto
  $archivoContacto = (object) $archivoArrayConctac;

@endphp


@section('content')

  <main>
    <section id="cotizar">


      <div class=" swiper slider__headers bienvenidaSection">
        <div class="  absolute pt-44 w-11/12  text-textWhite z-20  " style="margin-left: 4.1%">




          <div class=" grid grid-cols-1 lg:grid-cols-2 gridBienvenida">
            <div class="w-full lg:w-5/6  ">
              <div class="flex flex-col gap-5">
                <p class="before__underline">
                  <span
                    class="text-text16 md:text-text20  font-airbnb_500 [text-shadow:_0_0_4px_rgb(0_0_0_/_40%)]">{{ $archivoObjeto->bienvenida['preTitulo'] }}</span>
                </p>

                <h1
                  class="font-airbnb_700 text-center text-text32 md:text-text60 md:text-left leading-none md:leading-tight [text-shadow:_0_0_4px_rgb(0_0_0_/_40%)]">
                  {{ $archivoObjeto->bienvenida['titulo'] }}
                </h1>

                <p
                  class="hidden md:block text-text18 md:text-text24 font-airbnb_400 [text-shadow:_0_0_4px_rgb(0_0_0_/_40%)]">
                  {{ $archivoObjeto->bienvenida['extracto'] }}
                </p>
                <div class="flex flex-col md:flex-row items-center ">
                  <a href="{{ $archivoObjeto->bienvenida['enlacebtn'] }}"
                    class="cursor-pointer gap-2  basis-6/12 lg:basis-5/12  button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full lg:w-auto hidden lg:flex font-airbnb_500">
                    {{ $archivoObjeto->bienvenida['textoBtn'] }}
                  </a>


                </div>
              </div>
            </div>

            <div class="hidden lg:flex justify-end">
              <div class="contenedor bg-white rounded-lg py-10 mx-auto">
                <div class="progress-bar flex justify-between px-8">
                  <div class="step">
                    <div class="bullet active"></div>
                  </div>
                  <div class="step">
                    <div class="bullet"></div>
                  </div>
                  <div class="step">
                    <div class="bullet"></div>
                  </div>
                  <div class="step hidden">
                    <div class="bullet"></div>
                  </div>
                </div>
                <div class="form-outer">
                  <form action="" id="formCotizacion">
                    @csrf
                    <div class="page slide-page">
                      <div class="px-10 h-full flex flex-col justify-start md:justify-center">
                        <div class="text-textAzul flex flex-col gap-10">
                          <p class="text__cotizar leading-none md:leading-tight font-airbnb_700">
                            Calcula el precio de limpieza de tu Airbnb
                          </p>
                          <div class="flex flex-col gap-5 font-airbnb_500">
                            <div class="flex flex-col md:flex-row md:justify-between gap-4 md:gap-10 md:items-center">
                              <label for="habitaciones" class="text__label md:max-w-[50%] ">
                                ¿Cuántas habitaciones tienes? Tengo…

                              </label>
                              <select required name="habitaciones" type="number" id="habitaciones"
                                class="selectpicker block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Elige el n° de Habitaciones</option>
                                @foreach ($espacios as $item)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                              </select>

                            </div>

                            <div class="flex flex-col md:flex-row md:justify-between gap-4 md:gap-10 md:items-center"
                              id="containerSelect2">
                              <label for="habitaciones" class="text__label md:max-w-[50%] ">
                                Elige una combinacion
                              </label>
                              <select required name="distribucion" type="number" id="distribucion"
                                class="selectpicker w-full">
                                <option value="">Elige combinacion</option>

                              </select>
                            </div>


                          </div>

                          <div class="flex gap-5 flex-col 2lg:flex-row justify-between items-center text-center">


                            <div class="w-full 2lg:w-auto">
                              <button id="btnSiguiente1"
                                class="firstNext next cursor-pointer flex gap-2 lg:basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full">
                                <span>Siguiente</span>
                                <div>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="page">
                      <div class="px-10 h-full flex flex-col justify-start md:justify-center">
                        <div class="text-textAzul flex flex-col gap-10 ">
                          <div>
                            <button class="prev-1 prev">
                              <span class="button-previo"></span>
                            </button>
                          </div>

                          <p class="text__cotizar leading-none md:leading-tight font-airbnb_700">
                            Calcula el precio de limpieza de tu Airbnb
                          </p>
                          <div class="flex flex-col gap-5 font-airbnb_500">
                            <div class="flex flex-col md:flex-row md:justify-between gap-4 md:gap-10 md:items-center">
                              <label for="metros" class="text__label">
                                ¿Cuántas m2 tiene tu departamento?
                              </label>
                              <select id="metros" name="metros" class="selectpicker md:w-1/2">
                                <option value=""> Selecciona una opcion</option>
                              </select>
                            </div>
                          </div>

                          <div class="flex gap-5 flex-col 2lg:flex-row justify-between items-center text-center">

                            <div class="w-full 2lg:w-auto">
                              <button
                                class="next-1 next disabled  cursor-pointer flex gap-2 lg:basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full">
                                <span>Siguiente</span>
                                <div>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="page">
                      <div class="px-10 h-full flex flex-col justify-start md:justify-center">
                        <div class="text-textAzul flex flex-col gap-7">
                          <div>
                            <button class="prev-2 prev">
                              <span class="button-previo"></span>
                            </button>
                          </div>
                          <p class="text__cotizar leading-none md:leading-tight font-airbnb_700">
                            Calcula el precio de limpieza de tu Airbnb
                          </p>
                          <div class="flex flex-col gap-6">
                            <div class="flex flex-col justify-between gap-5 font-airbnb_500">

                              <label for="habitaciones" class="text__label">
                                Déjanos tu dirección
                              </label>
                              <input required name="direction" type="text" id="direction"
                                class="text__input font-airbnb_500" placeholder="Avenida, Calle, Jiron, Pasaje..." />
                            </div>
                            <div class="flex flex-col justify-between gap-5 font-airbnb_500 md:flex-row">
                              <div class="flex flex-col justify-between md:w-1/2">
                                <label for="habitaciones" class="text__label">
                                  Teléfono
                                </label>
                                <input required name="telefono" type="text" id="telefono"
                                  class="text__input font-airbnb_500 w-3/4" placeholder="123456789" />
                              </div>
                              <div class="flex flex-col justify-between">
                                <label for="habitaciones" class="text__label">
                                  Correo @
                                </label>
                                <input required name="correo" type="text" id="correo"
                                  class="text__input font-airbnb_500" placeholder="tucorreo@dominio.com" />

                              </div>

                            </div>

                            <div class="flex flex-col justify-between gap-5 font-airbnb_500 ">


                            </div>

                          </div>

                          <div class="flex gap-5 flex-col 2xl:flex-row justify-between items-center text-center">


                            <div class="w-full 2xl:w-auto">
                              <button
                                class="next-2 next cursor-pointer flex gap-2 w-full 2xl:basis-5/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center">
                                <span>Enviar mi solicitud</span>
                                <div>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="page">
                      <div class="h-full flex flex-col justify-center relative">
                        <div class="text-textAzul flex flex-col gap-5 px-10">
                          <div class="flex flex-col gap-5 justify-center items-center text-center">
                            <div>
                              <img src="{{ asset('images/img/image_8.png') }}" alt="limpieza"
                                class="w-24 h-24 md:w-36 md:h-36">

                            </div>
                            <p class=" text-text32 md:text-text40 font-airbnb_700">
                              ¡Éxito! Hemos recibido tu información
                            </p>
                            <p class="font-airbnb_400 text-text16 md:text-text24">
                              Basándonos en la información proporcionada, tu
                              estimación de precio inicial es...
                            </p>

                            <div>
                              <p class="font-airbnb_700 text-text48 md:text-text52" id="preciofinal">
                                S/
                              </p>
                            </div>


                            <div id="containerBntService">
                              <button id="btnAdquirirServicio"
                                class="submit cursor-pointer flex gap-2 basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center"
                                type="submit">
                                <span>Adquirir el servicio</span>
                                <div>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                                </div>
                              </button>
                            </div>

                            <div>
                              <img src="{{ asset('images/img/imagen_22.png') }}" alt="limpia bnb"
                                class="absolute bottom-[5%] left-0">

                              <img src="{{ asset('images/img/imagen_23.png') }}" alt="limpia bnb"
                                class="absolute bottom-1/2 right-0">

                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </form>
                </div>

                <div class="absolute top-0 hidden corona-top">
                  <img src="./images/img/imagen_28.png" alt="">
                </div>
              </div>
            </div>




          </div>

          <div class="" data-aos="fade-up" data-aos-offset="150">
            <div class="swiper servicios__header">
              <div class="swiper-wrapper ">
                @foreach ($beneficios as $beneficio)
                  <div class="swiper-slide ">
                    <div class="flex gap-2 items-center justify-start">
                      <div class="flex justify-center items-center">
                        <img src="{{ $beneficio->icono }}" alt="">
                      </div>
                      <h2 class="font-airbnb_500 text-text18 w-full md:w-2/3">
                        {{ $beneficio->titulo }}
                      </h2>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>




        </div>
        @if ($sliders->count())

          <div class="absolute inset-0 bg__dark z-10 h-full bienvenidaSection"></div>
          <div class="swiper-wrapper ">


            @foreach ($sliders as $imagen)
              <div class="swiper-slide">
                <img src="{{ asset($imagen->url_image . $imagen->name_image) }}" alt=""
                  class="object-cover w-full " style="min-height: 550px;">
                <div class=" bg-cover bg-center bg-no-repeat sm:w-full h-full"
                  style="background: url('{{ asset($imagen->url_image . $imagen->name_image) }}') ; background-repeat: no-repeat; background-size:cover">

                </div>
              </div>
            @endforeach


          </div>
        @else
          <div class="absolute inset-0 bg__dark z-10 h-full">

          </div>
          <img src="{{ asset('images/img/noimagen.jpg') }}" class="bienvenidaSection " alt="">


        @endisset

    </div>



  </section>
  <section class=" md:hidden" data-aos="fade-up" data-aos-offset="150">
    <div class="   w-11/12  text-textWhite z-20   shadow-2xl" style="margin-left: 4.1%">
      <div class=" grid grid-cols-1 lg:grid-cols-2 ">
        <div class=" md:hidden">
          <div class="contenedor bg-white rounded-lg py-10 mx-auto h-[650px] md:h-full">
            <div class="progress-bar flex justify-between px-8">
              <div class="step">
                <div class="bullet active"></div>
              </div>
              <div class="step">
                <div class="bullet"></div>
              </div>
              <div class="step">
                <div class="bullet"></div>
              </div>
              <div class="step hidden">
                <div class="bullet"></div>
              </div>
            </div>
            <div class="form-outer" id="formCotizacionMo">
              <form action="" id="formCotizacion">
                @csrf
                <div class="page slide-page">
                  <div class="px-10 h-full flex flex-col justify-start md:justify-center">
                    <div class="text-textAzul flex flex-col gap-10">
                      <p class="text__cotizar leading-none md:leading-tight font-airbnb_700">
                        Calcula el precio de limpieza de tu Airbnb
                      </p>
                      <div class="flex flex-col gap-5 font-airbnb_500">
                        <div class="flex flex-col md:flex-row md:justify-between gap-4 md:gap-10 md:items-center">
                          <label for="habitaciones" class="text__label md:max-w-[50%] ">
                            ¿Cuántas habitaciones tienes? Tengo…

                          </label>
                          <select required name="habitaciones" type="number" id="habitaciones"
                            class="selectpicker block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Elige el n° de Habitaciones</option>
                            @foreach ($espacios as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                          </select>

                        </div>

                        <div class="flex flex-col md:flex-row md:justify-between gap-4 md:gap-10 md:items-center"
                          id="containerSelect2">
                          <label for="habitaciones" class="text__label md:max-w-[50%] ">
                            Elige una combinacion
                          </label>
                          <select required name="distribucion" type="number" id="distribucion"
                            class="selectpicker w-full">
                            <option value="">Elige combinacion</option>

                          </select>
                        </div>


                      </div>

                      <div class="flex gap-5 flex-col 2lg:flex-row justify-between items-center text-center">


                        <div class="w-full 2lg:w-auto">
                          <button id="btnSiguiente1"
                            class="firstNext next cursor-pointer flex gap-2 lg:basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full">
                            <span>Siguiente</span>
                            <div>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="page">
                  <div class="px-10 h-full flex flex-col justify-start md:justify-center">
                    <div class="text-textAzul flex flex-col gap-10 ">
                      <div>
                        <button class="prev-1 prev">
                          <span class="button-previo"></span>
                        </button>
                      </div>

                      <p class="text__cotizar leading-none md:leading-tight font-airbnb_700">
                        Calcula el precio de limpieza de tu Airbnb
                      </p>
                      <div class="flex flex-col gap-5 font-airbnb_500">
                        <div class="flex flex-col md:flex-row md:justify-between gap-4 md:gap-10 md:items-center">
                          <label for="metros" class="text__label">
                            ¿Cuántas m2 tiene tu departamento?
                          </label>
                          <select id="metros" name="metros" class="selectpicker md:w-1/2">
                            <option value=""> Selecciona una opcion</option>
                          </select>
                        </div>
                      </div>

                      <div class="flex gap-5 flex-col 2lg:flex-row justify-between items-center text-center">

                        <div class="w-full 2lg:w-auto">
                          <button
                            class="next-1 next disabled  cursor-pointer flex gap-2 lg:basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full">
                            <span>Siguiente</span>
                            <div>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="page">
                  <div class="px-10 h-full flex flex-col justify-start md:justify-center">
                    <div class="text-textAzul flex flex-col gap-7">
                      <div>
                        <button class="prev-2 prev">
                          <span class="button-previo"></span>
                        </button>
                      </div>
                      <p class="text__cotizar leading-none md:leading-tight font-airbnb_700">
                        Calcula el precio de limpieza de tu Airbnb
                      </p>
                      <div class="flex flex-col gap-6">
                        <div class="flex flex-col justify-between gap-5 font-airbnb_500">

                          <label for="habitaciones" class="text__label">
                            Déjanos tu dirección
                          </label>
                          <input required name="direction" type="text" id="direction"
                            class="text__input font-airbnb_500" placeholder="Avenida, Calle, Jiron, Pasaje..." />
                        </div>
                        <div class="flex flex-col justify-between gap-5 font-airbnb_500 md:flex-row">
                          <div class="flex flex-col justify-between md:w-1/2">
                            <label for="habitaciones" class="text__label">
                              Teléfono
                            </label>
                            <input required name="telefono" type="text" id="telefono"
                              class="text__input font-airbnb_500 w-3/4" placeholder="123456789" />
                          </div>
                          <div class="flex flex-col justify-between">
                            <label for="habitaciones" class="text__label">
                              Correo @
                            </label>
                            <input required name="correo" type="text" id="correo"
                              class="text__input font-airbnb_500" placeholder="tucorreo@dominio.com" />

                          </div>

                        </div>

                        <div class="flex flex-col justify-between gap-5 font-airbnb_500 ">


                        </div>

                      </div>

                      <div class="flex gap-5 flex-col 2xl:flex-row justify-between items-center text-center">


                        <div class="w-full 2xl:w-auto">
                          <button
                            class="next-2 next cursor-pointer flex gap-2 w-full 2xl:basis-5/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center">
                            <span>Enviar mi solicitud</span>
                            <div>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="page">
                  <div class="h-full flex flex-col justify-center relative">
                    <div class="text-textAzul flex flex-col gap-5 px-10">
                      <div class="flex flex-col gap-5 justify-center items-center text-center">
                        <div>
                          <img src="{{ asset('images/img/image_8.png') }}" alt="limpieza"
                            class="w-24 h-24 md:w-36 md:h-36">

                        </div>
                        <p class=" text-text32 md:text-text40 font-airbnb_700">
                          ¡Éxito! Hemos recibido tu información
                        </p>
                        <p class="font-airbnb_400 text-text16 md:text-text24">
                          Basándonos en la información proporcionada, tu
                          estimación de precio inicial es...
                        </p>

                        <div>
                          <p class="font-airbnb_700 text-text48 md:text-text52" id="preciofinal">
                            S/
                          </p>
                        </div>


                        <div id="containerBntService">
                          <button id="btnAdquirirServicio"
                            class="submit cursor-pointer flex gap-2 basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center"
                            type="submit">
                            <span>Adquirir el servicio</span>
                            <div>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </button>
                        </div>

                        <div>
                          <img src="{{ asset('images/img/imagen_22.png') }}" alt="limpia bnb"
                            class="absolute bottom-[5%] left-0">

                          <img src="{{ asset('images/img/imagen_23.png') }}" alt="limpia bnb"
                            class="absolute bottom-1/2 right-0">

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </form>
            </div>

            <div class="absolute top-0 hidden corona-top">
              <img src="./images/img/imagen_28.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="servicios" data-aos="fade-up" data-aos-offset="150">
    <div class="swiper servicios__principales text-textAzul">


      <div class="swiper-wrapper">

        @foreach ($services as $service)
          <div class="swiper-slide">
            <div class="flex flex-col lg:flex-row gap-10 md:gap-0">
              <div class="basis-1/2 order-2 md:order-1">
                <img src="{{ asset($service->url_image) }}" alt="{{ $service->name_image }}"
                  class="w-full h-full object-cover">

              </div>
              <div class="flex flex-col md:gap-5 basis-1/2 order-1 md:order-2 md:p-12 w-11/12 md:w-full mx-auto">
                <div class="py-12 md:w-5/6 md:mx-auto">
                  <div class="buttonSliderServicios">
                    @if ($services->count() > 1)
                      <div class="swiper-button-next bg-[#0071be] md:bg-[#D1ECF8] hover:bg-[#0071be]"></div>
                      <div class="swiper-button-prev bg-[#0071be] md:bg-[#D1ECF8] hover:bg-[#0071be]"></div>
                    @endif

                  </div>
                </div>

                <div class="text-textAzul flex flex-col gap-5 md:w-5/6 mx-auto" data-aos="fade-up"
                  data-aos-offset="150">
                  <h2 class="font-airbnb_700 text-text32 2md:text-text36 leading-none md:leading-tight">
                    Servicios
                  </h2>
                  <h2 class="font-airbnb_700 text-text32 2md:text-text52 leading-none md:leading-tight">
                    {{-- Limpieza y lavandería de airbnbs con reposición de
                                        ammenities hoteleros --}}
                    {{ $service->title }}
                  </h2>

                  <div class="font-airbnb_400 text-text16 2md:text-text20">
                    {!! $service->description !!}
                  </div>



                  <div class="flex flex-col md:flex-row items-center">
                    <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}"
                      class="cursor-pointer flex gap-2 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto font-airbnb_500 leading-none">
                      ¡Quiero este servicio!
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach



      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section id="pasos" data-aos="fade-up" data-aos-offset="150">
    <div class="flex flex-col lg:flex-row gap-10 md:gap-0 my-12 md:my-0">
      <div class="basis-1/2 flex flex-col justify-center gap-10 md:py-16 md:pl-24 w-11/12 md:w-full mx-auto">
        <div class="before__underline before__underline-step">
          <p class="text-[#BFDE8E] text-text18 2md:text-text24 font-airbnb_500">

            {{ $archivoPasoaPaso->PasoApaso['preTitulo'] }}
          </p>
        </div>
        <h2 class="font-airbnb_700 text-text32 2md:text-text48 text-textAzul leading-none md:leading-tight">
          {{ $archivoPasoaPaso->PasoApaso['titulo'] }}
        </h2>
        <p class="font-airbnb_400 text-text16 2md:text-text20 text-textAzul">
          {{ $archivoPasoaPaso->PasoApaso['extracto'] }}
        </p>

        <ul class="text-textAzul deslizante">
          <li class="flex items-center py-5" data-aos="fade-up" data-aos-offset="150">
            <div class="progress one">
              <div class="flex gap-5 items-start">
                <div class="cursor-pointer">
                  <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="group">
                    <circle cx="26" cy="26" r="26" fill="#0071BE" id="firstCircle"
                      class="group-hover:fill-bgAzul md:duration-500" />
                    <path
                      d="M16.4004 26.2598H25.7409M26.2598 35.6004V16.4004M21.3301 23.1463V19.7734M19.6436 21.4598H23.0166M19.6436 31.449H23.0166M29.3734 28.0761H32.7463M29.3734 24.9626H32.7463M18.995 35.6004H33.0058C34.4387 35.6004 35.6004 34.4387 35.6004 33.0058V18.995C35.6004 17.562 34.4387 16.4004 33.0058 16.4004H18.995C17.562 16.4004 16.4004 17.562 16.4004 18.995V33.0058C16.4004 34.4387 17.562 35.6004 18.995 35.6004Z"
                      stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      id="firstIcon" class="group-hover:stroke-bgWhite md:duration-500" />
                  </svg>
                </div>
                <div data-aos="fade-up" data-aos-offset="150">
                  <h6 class="font-airbnb_700 text-text24 2md:text-text32">
                    {{ $archivoPasoaPaso->PasoApaso['bullet1'] }}
                  </h6>
                  <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                    {{ $archivoPasoaPaso->PasoApaso['textbullet1'] }}
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li class="flex items-center py-5">
            <div class="progress two">
              <div class="flex gap-5 items-start">
                <div class="cursor-pointer" data-aos="fade-up" data-aos-offset="150">
                  <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="group">
                    <circle cx="26" cy="26" r="26" fill="#F8FBFD" id="secondCircle"
                      class="group-hover:fill-bgAzul md:duration-500" />
                    <path
                      d="M25.9996 35.5554H19.9996C18.6741 35.5554 17.5996 34.4809 17.5996 33.1554L17.5997 18.7555C17.5997 17.43 18.6742 16.3555 19.9997 16.3555H30.8C32.1255 16.3555 33.2 17.43 33.2 18.7555V22.9555M29.6 30.0131C29.6 28.7164 30.6745 27.6652 32 27.6652C33.3255 27.6652 34.4 28.7164 34.4 30.0131C34.4 31.3098 33.3255 32.3609 32 32.3609M32 35.6456V35.5554M21.8 21.1555H29M21.8 24.7555H29M21.8 28.3555H25.4"
                      stroke="#66AAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      id="secondIcon" class="group-hover:stroke-strokeWithe md:duration-500" />
                  </svg>
                </div>

                <div data-aos="fade-up" data-aos-offset="150">
                  <h6 class="font-airbnb_700 text-text24 2md:text-text32">
                    {{ $archivoPasoaPaso->PasoApaso['bullet2'] }}
                  </h6>

                  <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                    {{ $archivoPasoaPaso->PasoApaso['textbullet2'] }}
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li class="flex items-center py-5">
            <div class="progress three">
              <div class="flex gap-5 items-start">
                <div class="cursor-pointer" data-aos="fade-up" data-aos-offset="150">
                  <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="group">
                    <circle cx="26" cy="26" r="26" fill="#F8FBFD" id="thirdsCircle"
                      class="group-hover:fill-bgAzul md:duration-500" />
                    <path
                      d="M18.5 24.5H17V33.5C17 34.3284 17.6716 35 18.5 35H33.5C34.3284 35 35 34.3284 35 33.5V24.5H33.5M18.5 24.5L26 29L33.5 24.5M18.5 24.5V20C18.5 18.3431 19.8431 17 21.5 17H30.5C32.1569 17 33.5 18.3431 33.5 20V24.5"
                      stroke="#66AAD8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      id="thirdsIcon" class="group-hover:stroke-strokeWithe md:duration-500" />
                  </svg>
                </div>

                <div data-aos="fade-up" data-aos-offset="150">
                  <h6 class="font-airbnb_700 text-text24 2md:text-text32">
                    {{ $archivoPasoaPaso->PasoApaso['bullet3'] }}
                  </h6>

                  <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                    {{ $archivoPasoaPaso->PasoApaso['textbullet3'] }}
                  </p>
                </div>
              </div>
            </div>
          </li>
        </ul>

        <div class="flex items-center justify-start w-full h-full">
          <a {{-- href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}" --}} href="{{ $archivoPasoaPaso->PasoApaso['enlacebtn'] }}"
            class="hidden cursor-pointer md:flex gap-2 button__base font-airbnb_500 bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto md:text-text16 text-center leading-none">
            {{ $archivoPasoaPaso->PasoApaso['textoBtn'] }}


            <a href="#formCotizacionMo"
              class="md:hidden cursor-pointer flex gap-2 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto md:text-text16 text-center font-airbnb_500 leading-none">
              {{ $archivoPasoaPaso->PasoApaso['textoBtn'] }}
            </a>
          </a>
        </div>
      </div>
      <div class="basis-1/2 flex justify-end items-center relative">

        <img src="{{ asset($archivoPasoaPaso->PasoApaso['img']) }}" alt="limpieza"
          class="w-full md:w-[90%] h-full object-cover">
        <img src="{{ asset('images/img/image_7.png') }}" alt="limpieza"
          class="absolute bottom-0 right-0 w-32 md:w-auto">

      </div>
    </div>
  </section>

  <section class="w-11/12 mx-auto text-textAzul pt-5 md:pt-10" data-aos="fade-up" data-aos-offset="150">
    <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-1">
      <div class="col-span-1 md:col-span-3 order-1 flex flex-col justify-start  md:justify-center">
        <div class="flex flex-col gap-5">
          <div class="before__underline before__underline-step">
            <p class="text-[#BFDE8E] text-text18 2md:text-text24 font-airbnb_500">

              {{ $archivoTesti->testimonios['preTitulo'] }}

            </p>
          </div>
          <h3 class="text-text48 2md:text-text68 font-airbnb_700 leading-none md:leading-tight">

            {{ $archivoTesti->testimonios['titulo'] }}
          </h3>
          <p class="font-airbnb_400 text-text16 2md:text-text24">
            {{ $archivoTesti->testimonios['extracto'] }}
          </p>
        </div>
      </div>

      <div class="col-span-1 md:col-span-4 order-2 md:order-3 relative">
        <div>
          <div class="swiper testimonios">
            <div class="swiper-wrapper pt-24 md:pt-0">
              @foreach ($testimonios as $testimonio)
                <div class="swiper-slide">
                  <div class="flex flex-col gap-5 bg-[#F8FBFD] p-10 rounded-lg">
                    <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none text-[#004472]">
                      {{ $testimonio->name }}
                    </p>

                    <p class="font-airbnb_400 text-[16px] 2md:text-text20 text-[#004472]">
                      {!! $testimonio->testimonie !!}
                    </p>

                    <p class="font-airbnb_400 text-[16px] 2md:text-text20 text-[#004472]">
                      {{-- 26 de noviembre, 2023 --}}
                      {{ \Carbon\Carbon::parse($testimonio->created_at)->locale('es')->isoFormat('DD [de] MMMM, YYYY') }}
                    </p>
                  </div>
                </div>
              @endforeach
            </div>

            <div class="flex justify-end items-center buttonSliderTestimonios">
              @if ($testimonios->count() > 3)
                <div class="swiper-button-next siguiente bg-[#0071be] md:bg-[#D1ECF8] hover:bg-[#0071be]"></div>
                <div class="swiper-button-prev anterior bg-[#0071be] md:bg-[#D1ECF8] hover:bg-[#0071be]"></div>
              @endif

            </div>
          </div>
        </div>
      </div>
      <div class="col-span-1 md:col-span-1 order-3 md:order-2">
        <div class="flex items-center justify-end w-full h-full">
          {{-- <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}" --}}
          <a href="#formCotizacion"
            class="hidden  cursor-pointer md:flex gap-2 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto md:text-text16 text-center font-airbnb_500 leading-none">
            {{ $archivoTesti->testimonios['textoBtn'] }}
          </a>
          <a href="#formCotizacionMo"
            class="md:hidden cursor-pointer flex gap-2 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto md:text-text16 text-center font-airbnb_500 leading-none">
            {{ $archivoTesti->testimonios['textoBtn'] }}
          </a>
        </div>
      </div>
    </div>
  </section>


  @isset($nosotros)
    <section id="nosotros" data-aos="fade-up" data-aos-offset="150">
      <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 my-12">
        <div class="lg:col-span-1 relative bg-bgAzul text-textWhite flex justify-center items-center py-24 md:py-0">
          <div class="z-10 relative w-5/6 flex flex-col gap-10 py-5">
            <div class="before__underline">
              <p class="text-text18 2md:text-text24 font-airbnb_500">
                Nuestra historia
              </p>
            </div>
            <h2 class="font-airbnb_700 text-text40 2md:text-text52 leading-none md:leading-tight">
              {{ $nosotros->titulo ?? 'Configura about-Us en el backend' }}
              {{-- De Servicio de Administración a Líder en Limpieza: El
            Surgimiento de Limpia BnB --}}
            </h2>

            <p class="font-airbnb_400 text-text16 2md:text-text20">
              {{ $nosotros->descripcion }}

              {{-- Limpia BnB nace de Ventura BnB, una empresa de administración de
            departamentos a corto plazo, la cual creó y calibró un equipo de
            limpieza con tan buenos resultados, que en cuestión de poco
            tiempo estaba limpiando los airbnbs de otros anfitriones. --}}
            </p>
          </div>

          <img src="{{ asset('images/img/image_6.png') }}" alt="limpieza" class="absolute top-0 left-0 z-0 ">

        </div>

        <div class="lg:col-span-1 hidden lg:block">
          <div class="w-full h-full">

            <img src="{{ asset($nosotros->imagen) }}" alt="limpieza" class="w-full h-full  object-cover">

          </div>
        </div>

        @if ($staff->count() > 0)
          <div class="lg:col-span-2">
            <div class="swiper servicios__principales text-textAzul">






              <div class="swiper-wrapper">

                @foreach ($staff as $item)
                  <div class="swiper-slide">
                    <img src="{{ asset($item->imagen) }}" alt="limpieza" class="w-full h-full object-cover">
                  </div>
                @endforeach



              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        @else
          <div class="lg:col-span-2 w-[1700px] h-[1130px] object-cover">

            <img src="{{ asset('images/img/noimagen.jpg') }}" alt="limpieza" class="w-full h-full">

          </div>
        @endif


      </div>
    </section>

  @endisset



  <section id="contacto" data-aos="fade-up" data-aos-offset="150">
    <div class="w-11/12 mx-auto text-textAzul my-12">
      <div class="before__underline before__underline-contacto mb-8">
        <p class="text-text18 2md:text-text24 font-airbnb_500 text-textCeleste">
          {{ $archivoContacto->Contacto['preTitulo'] }}
        </p>
      </div>
      <div class="flex flex-col lg:flex-row gap-12 lg:gap-32">

        <div class="basis-1/2 flex flex-col gap-8">

          <h3 class="font-airbnb_700 text-text32 2md:text-text40 leading-none 2md:leading-tight">
            {{ $archivoContacto->Contacto['titulo'] }}

          </h3>

          <p class="font-airbnb_400 text-text16 2md:text-text20">
            {{ $archivoContacto->Contacto['extractoIzq'] }}
          </p>

          <p class="font-airbnb_700 text-text32 2md:text-text40 leading-none 2md:leading-tight">
            {{ $archivoContacto->Contacto['tituloForm'] }}
          </p>

          <form id="formContactos">
            @csrf
            <div class="flex flex-col gap-5 font-airbnb_400">
              <div class="flex flex-col md:flex-row gap-5">
                <input id="nombre" required type="text" name="name" placeholder="Nombres"
                  class="outline-none py-3 2md:py-4 basis-1/2 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]" />

                <input id="apellido" required type="text" name="last_name" placeholder="Apellidos"
                  class="outline-none py-3 2md:py-4 basis-1/2 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]" />
              </div>
              <div class="flex flex-col md:flex-row gap-5">
                <input required id="email" type="email" name="email" placeholder="Correo Electrónico"
                  class="outline-none py-3 2md:py-4 basis-1/2 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]" />

                <input maxlength="9" id="telefono" required type="tel" name="phone"
                  placeholder="Número de Teléfono"
                  class="outline-none py-3 2md:py-4 basis-1/2 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]" />
              </div>

              <div>
                <textarea id="mensaje" required name="message" id="" cols="30" rows="5"
                  placeholder="Comentario"
                  class="outline-none py-3 2md:py-4 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 w-full font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]"></textarea>
              </div>

              {{-- <div class="flex flex-col justify-between gap-5">
                                    <label class="text__label font-airbnb_500">
                                        ¿Prefieres que nos comuniquemos por Teléfono o
                                        Correo Electrónico?
                                    </label>

                                    <div class="flex gap-5 items-center">
                                        <div class="flex items-center gap-2">
                                            <input type="radio" id="opcion3" name="opcion" value="opcion3"
                                                class="w-5 h-5 accent-[#BFDE8E] cursor-pointer">
                                            <label for="opcion3" class="text__label leading-none font-airbnb_500">WhatsApp</label>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            <input type="radio" id="opcion4" name="opcion" value="opcion4"
                                                class="w-5 h-5 accent-[#BFDE8E] cursor-pointer">
                                            <label for="opcion4" class="text__label leading-none font-airbnb_500">Correo
                                                electrónico</label>
                                        </div>
                                    </div>
                                </div> --}}

              <div class="mt-10">
                <button type="submit"
                  class="firstNext next cursor-pointer flex gap-2 lg:basis-4/12 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center button__base-padding w-full md:w-auto font-airbnb_500">
                  <span>Enviar</span>
                  <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </button>
              </div>
            </div>
          </form>
        </div>

        <div class="basis-1/2">
          <div class="flex flex-col h-full  gap-10">
            <h4 class="font-airbnb_700 text-text32 2md:text-text40 leading-none 2md:leading-tight">
              {{ $archivoContacto->Contacto['tituloDerech'] }}
            </h4>
            <p class="text-text16 font-airbnb_400 2md:text-text20 text-[#004472]">
              {{ $archivoContacto->Contacto['ExtractoDerech'] }}
            </p>

            <div class="flex flex-col gap-5 text-colorSubtitleLittle">
              <div class="flex gap-2">
                <img src="{{ asset('images/svg/direccion.svg') }}" alt="direccion"
                  class="h-7 w-7 2md:h-10 2md:w-10">

                <div>
                  <p class="font-airbnb_500 text-text18 2md:text-text24 leading-none text-[#00395F]">
                    Dirección
                  </p>
                  <p class="font-airbnb_400 text-text16 2md:text-text20 text-[#004472]">
                    {{-- Calle Independencia 360 Miraflores --}}
                    {{ $generales->address }}, {{ $generales->inside }} -
                    {{ $generales->district }}
                  </p>
                </div>
              </div>

              <div class="flex gap-2">
                <img src="{{ asset('images/svg/numero.svg') }}" alt="numero" class="h-7 w-7 2md:h-10 2md:w-10">

                <div>
                  <p class="font-airbnb_500 text-text18 2md:text-text24 leading-none text-[#00395F]">
                    Número de Teléfono
                  </p>

                  <p href="#" class="font-airbnb_400 text-text16 2md:text-text20 text-[#004472]">
                    {{-- +51 931 359996 --}} {{ $generales->office_phone }}
                  </p>
                </div>
              </div>

              <div class="flex gap-2">
                <img src="{{ asset('images/svg/email.svg') }}" alt="email" class="h-7 w-7 2md:h-10 2md:w-10 ">

                <div>
                  <p class="font-airbnb_500 text-text18 2md:text-text24 leading-none text-[#00395F]">
                    Correo Electrónico
                  </p>
                  <p class="font-airbnb_400 text-text16 2md:text-text20 text-[#004472]">
                    {{-- info@limpiabnb.pe --}} {{ $generales->email }}</p>
                </div>
              </div>

              <div class="flex gap-2">
                <img src="{{ asset('images/svg/atencion.svg') }}" alt="direccion" class="h-7 w-7 2md:h-10 2md:w-10">

                <div>
                  <p class="font-airbnb_500 text-text18 2md:text-text24 leading-none text-[#00395F]">
                    Horario de Atención
                  </p>
                  <p class="font-airbnb_400 text-text16 2md:text-text20 text-[#004472]">
                    {{ $generales->schedule }}
                  </p>
                  {{-- <p class="font-airbnb_400 text-text16 2md:text-text20 text-[#004472]">
                      Domingo: 10:00 AM - 5:00 PM
                    </p> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-aos="fade-up" data-aos-offset="150">
    <img src="{{ asset('images/img/image_12.png') }}" alt="limpieza" class="w-full h-full hidden md:block">
    <img src="{{ asset('images/img/imagen_24.png') }}" alt="limpieza" class="w-full h-full block md:hidden">

  </section>
</main>
<script>
  var swiper = new Swiper(".slider__headers", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    grabCursor: true,
    centeredSlides: false,
    initialSlide: 0,
    allowTouchMove: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true
    },
  });
</script>

@section('scripts_improtados')

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      var headerServices = new Swiper(".servicios__header", {
        slidesPerView: 3,
        spaceBetween: 0,
        loop: false,
        centeredSlides: false,
        initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
        /* pagination: {
          el: ".swiper-pagination-estadisticas",
          clickable: true,
        }, */
        //allowSlideNext: false,  //Bloquea el deslizamiento hacia el siguiente slide
        //allowSlidePrev: false,  //Bloquea el deslizamiento hacia el slide anterior
        allowTouchMove: false, // Bloquea el movimiento táctil
        /* autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        }, */

        breakpoints: {
          0: {
            slidesPerView: 1,
            centeredSlides: false,
            loop: true,
          },
          1024: {
            slidesPerView: 3,
            centeredSlides: false,

          },
        },
      });

      var mainServicios = new Swiper(".servicios__principales", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        centeredSlides: false,
        initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
        allowTouchMove: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        //allowSlideNext: false,  //Bloquea el deslizamiento hacia el siguiente slide
        //allowSlidePrev: false,  //Bloquea el deslizamiento hacia el slide anterior

        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,

        },
        scrollbar: {
          el: '.swiper-scrollbar',
          draggable: true,
        },
      });

      var testimonios = new Swiper(".testimonios", {
        slidesPerView: 3,
        spaceBetween: 40,
        loop: true,
        grabCursor: true,
        centeredSlides: false,
        initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        allowTouchMove: true, // Bloquea el movimiento táctil
        /* autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        }, */

        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });

      /* deslizante */

    })
  </script>
  <script>
    $(document).ready(function() {
      const one = $(".one:visible");
      const two = $(".two:visible");
      const three = $(".three:visible");
      const firstIcon = $("#firstIcon");
      const firstCircle = $("#firstCircle");
      const secondIcon = $("#secondIcon");
      const secondCircle = $("#secondCircle");
      const thirdsIcon = $("#thirdsIcon");
      const thirdsCircle = $("#thirdsCircle");

      let stepOne = null;
      let stepTwo = null;
      let stepThree = null;

      one.on('click', function() {
        stepOne = 1;
        one.addClass("active");
        two.removeClass("active");
        three.removeClass("active");

        if (stepOne < stepTwo || stepOne < stepThree) {
          secondIcon.attr("stroke", "#66AAD8");
          secondCircle.attr("fill", "#F8FBFD");
          thirdsIcon.attr("stroke", "#66AAD8");
          thirdsCircle.attr("fill", "#F8FBFD");
        }
        if (stepOne < stepTwo && stepOne < stepThree) {
          stepTwo = null;
          stepThree = null;
        }
      });

      two.on('click', function() {
        stepTwo = 2;
        one.addClass("active");
        two.addClass("active");
        three.removeClass("active");
        secondIcon.attr("stroke", "#ffffff");
        secondCircle.attr("fill", "#0071be");

        if (stepTwo < stepThree || stepTwo > stepOne) {
          thirdsIcon.attr("stroke", "#66AAD8");
          thirdsCircle.attr("fill", "#F8FBFD");

          firstIcon.attr("stroke", "#ffffff");
          firstCircle.attr("fill", "#0071be");
        }
      });

      three.on('click', function() {
        stepThree = 3;
        one.addClass("active");
        two.addClass("active");
        three.addClass("active");

        thirdsIcon.attr("stroke", "#ffffff");
        thirdsCircle.attr("fill", "#0071be");

        if (stepThree > stepTwo || stepThree > stepOne) {
          firstIcon.attr("stroke", "#ffffff");
          firstCircle.attr("fill", "#0071be");
          secondIcon.attr("stroke", "#ffffff");
          secondCircle.attr("fill", "#0071be");
        }
      });

      /* Progresbar */

      function alerta(message) {
        Swal.fire({
          title: message,
          icon: "error",
        });
      }

      const slidePage = $(".slide-page:visible");
      const nextBtnFirst = $(".firstNext:visible");
      const prevBtnSec = $(".prev-1:visible");
      const nextBtnSec = $(".next-1:visible");
      const prevBtnThird = $(".prev-2:visible");
      const nextBtnThird = $(".next-2:visible");
      const bullet = $(".step:visible .bullet:visible");
      const progress = $(".progress-bar:visible");
      const corona = $(".corona-top:visible");

      let current = 2; // Estado inicial

      nextBtnFirst.on("click", function(event) {
        event.preventDefault();

        const habitaciones = $('[id="habitaciones"]:visible').val();
        const distribucion = $('[id="distribucion"]:visible').val();
        const arrayValuePageOne = [habitaciones, distribucion];

        if (arrayValuePageOne.includes("")) {
          alerta("Por favor, asegurese de completar todos los campos");
          return;
        }

        if (arrayValuePageOne.some(valor => valor <= 0)) {
          alerta("Por favor, asegurese de solo ingresar valores mayores a cero");
          return;
        }

        slidePage.css('marginLeft', '-25%');
        bullet.eq(current - 1).addClass("active");
        current += 1;
      });

      nextBtnSec.on("click", function(event) {
        event.preventDefault();

        //quitar clase h-650px al div con clase contenedor
        const contenedor = $('.contenedor:visible');
        contenedor.removeClass("h-[650px]");


        const metros = $('[id="metros"]:visible').val();
        const arrayValuePageOne = [metros];
        if (arrayValuePageOne.includes("")) {
          alerta("Por favor, asegurese de indicar los m2");
          return;
        }


        slidePage.css('marginLeft', '-50%');
        bullet.eq(current - 1).addClass("active");
        current += 1;
      });

      nextBtnThird.on("click", function(event) {
        event.preventDefault();

        const direction = $('input[name="direction"]:visible').val();
        const arrayValuePageThree = [direction];

        if (arrayValuePageThree.includes("")) {
          alerta("Por favor, asegurese de completar todos los campos");
          return;
        }

        slidePage.css('marginLeft', '-75%');
        bullet.eq(current - 1).addClass("active");
        if (current === 4) {
          progress.addClass("opacity-0");
          corona.removeClass('hidden');
        }
      });

      $('[id="formCotizacion"]:visible').submit(function(event) {
        event.preventDefault();
        let formDataArray = $(this).serializeArray();
        console.log(formDataArray);
        let loading = `<svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>`;
        $('[id="btnAdquirirServicio"]:visible').html(loading);

        $.ajax({
          url: '{{ route('guardarSolicitud') }}',
          method: 'POST',
          data: formDataArray,
          success: function(response) {
            Swal.fire({
              title: `Solicitud enviada correctamente `,
              icon: "success",
            });

            $('[id="formCotizacion"]:visible')[0].reset();


            $("[id='containerBntService']:visible").attr('hidden', true);
          },
          error: function(error) {
            const obj = error.responseJSON.message;
            const keys = Object.keys(error.responseJSON.message);
            let flag = false;
            keys.forEach(key => {
              if (!flag) {
                const e = obj[key][0];
                Swal.fire({
                  title: error.message,
                  text: e,
                  icon: "error",
                });
                flag = true; // Marcar como mostrado
              }
            });
          }
        });
      });

      prevBtnSec.on("click", function(event) {
        event.preventDefault();
        slidePage.css('marginLeft', '0%');
        bullet.eq(current - 2).removeClass("active");
        current -= 1;
      });

      prevBtnThird.on("click", function(event) {
        event.preventDefault();
        slidePage.css('marginLeft', '-25%');
        bullet.eq(current - 2).removeClass("active");
        current -= 1;
      });
    });
  </script>

  <script>
    $(document).on('change', '#habitaciones', function() {

      let habitaciones = $(this).val();

      const btnSiguiente = $('[id="btnSiguiente1"]:visible')
      btnSiguiente.addClass('opacity-50 cursor-not-allowed').prop('disabled', true);
      //ejecutamos el ajax
      $.ajax({
        url: "{{ route('buscarHabitaciones') }}",
        dataType: "json",
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          id: habitaciones
        }
      }).done(function(res) {

        $('[id="containerSelect2"]').show()
        const distribuciones = $('[id="distribucion"]:visible')
        distribuciones.empty();
        distribuciones.append(
          '<option value="">Elige combinacion</option>'
        )
        // $('#cont_provincia').toggleClass('opacity-15')
        btnSiguiente.removeClass('opacity-50 cursor-not-allowed').prop('disabled', false);
        $.each(res, function(key, value) {
          distribuciones.append(
            '<option value="' + value['id'] + '">' + value['name'] + '</option>'
          )
        });
      });
    })
    $(document).on('change', '#distribucion', function() {

      let distribucion = $(this).val();



      //ejecutamos el ajax
      $.ajax({
        url: "{{ route('buscarArea') }}",
        dataType: "json",
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          id: distribucion
        }
      }).done(function(res) {
        const metros = $('[id="metros"]:visible')
        metros.empty();
        metros.append(
          '<option value="">Seleccionar m2</option>'
        )
        // $('#cont_provincia').toggleClass('opacity-15')
        $.each(res, function(key, value) {
          metros.append(
            '<option value="' + value['precio'] + '">' + value['name'] + '</option>'
          )
        });



      });
    })

    $(document).on('change', '#metros', function(e) {
      let preciofinal = $('[id="metros"]:visible').val()
      $('[id="preciofinal"]:visible').text(`S/. ${preciofinal}`)
    })
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.selectpicker').select2();

      $('[id="containerSelect2"]:visible').hide()


    });

    $('#formContactos').submit(function(e) {
      e.preventDefault()
      console.log('Enviando contacto')
      let formDataArray = $(this).serializeArray();
      Swal.fire({

        title: 'Procesando información',
        html: `Enviando... 
<div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
                <div role="status">
                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    
                </div>
            </div> 
`,
        allowOutsideClick: false

      });

      $.ajax({
        url: '{{ route('guardarContactos') }}',
        method: 'POST',
        data: formDataArray,
        success: function(response) {
          Swal.close();
          Swal.fire({
            title: `Solicitud enviada correctamente `,
            icon: "success",

          });

          // $('#formCotizacion')[0].reset();

          $("#containerBntService").attr('hidden', true)


        },
        error: function(error) {
          Swal.close();
          const obj = error.responseJSON.message;
          const keys = Object.keys(error.responseJSON.message);
          let flag = false;
          keys.forEach(key => {
            if (!flag) {
              const e = obj[key][0];
              Swal.fire({
                title: error.message,
                text: e,
                icon: "error",
              });
              flag = true; // Marcar como mostrado
            }
          });
        }
      });
    })
  </script>
@stop

@stop
