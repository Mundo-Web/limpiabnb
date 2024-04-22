@extends('components.public.matrix')

@section('css_improtados')

@stop


@section('content')

    <main>
        <section class="relative bg-imagen_27 md:bg-imagen_1 bg-cover bg-center bg-no-repeat sm:w-full h-full">
            <div class="absolute inset-0 bg__dark"></div>
            <div class="relative pt-44 w-11/12 mx-auto text-textWhite">
                <div class="grid grid-cols-1 lg:grid-cols-2" data-aos="fade-up" data-aos-offset="150">
                    <div class="w-full lg:w-5/6">
                        <div class="flex flex-col gap-5">
                            <p class="before__underline">
                                <span class="text-text16 md:text-text20  font-airbnb_500">¡Bienvenido a LimpiaBnB!</span>
                            </p>

                            <h1 class="font-airbnb_700 text-text40 md:text-text60 leading-none md:leading-tight">
                                Transformamos tu espacio en un lugar impecable y acogedor para
                                tus huéspedes
                            </h1>

                            <p class="text-text18 md:text-text24 font-airbnb_400 ">
                                Completa nuestro formulario rápido a continuación y descubre
                                el valor de nuestros servicios. ¡Comencemos juntos a crear un
                                espacio inolvidable!
                            </p>
                            <div class="flex flex-col md:flex-row items-center ">
                                <a href="#servicios"
                                    class="cursor-pointer gap-2  basis-6/12 lg:basis-5/12  button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full lg:w-auto hidden lg:flex font-airbnb_500">
                                    Ver servicios
                                </a>

                                <a href="{{ route('mobile') }}"
                                    class="cursor-pointer flex gap-2 basis-4/12 lg:basis-6/12 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto lg:hidden">
                                    Quiero mi servicio
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:flex justify-end">
                        <div class="contenedor bg-white rounded-lg py-12 mx-auto">
                            <div class="progress-bar flex justify-between px-10">
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
                                <form action="#">
                                    <div class="page slide-page">
                                        <div class="px-10 h-full flex flex-col justify-center">
                                            <div class="text-textAzul flex flex-col gap-10">
                                                <p class="text__cotizar leading-none md:leading-tight font-airbnb_700">
                                                    Calcula el precio de limpieza de tu Airbnb
                                                </p>
                                                <div class="flex flex-col gap-5 font-airbnb_500">
                                                    <div class="flex justify-between gap-10 items-center">
                                                        <label for="habitaciones" class="text__label max-w-[50%] ">
                                                            ¿Cuántas habitaciones tienes?
                                                        </label>
                                                        <input type="number" id="habitaciones"
                                                            class="text__input max-w-[50%]" />
                                                    </div>

                                                    <div class="flex justify-between gap-10 items-center">
                                                        <label for="camas" class="text__label basis-1/2">
                                                            ¿Cuántas camas tienes?
                                                        </label>
                                                        <input type="number" id="camas"
                                                            class="text__input max-w-[50%]" />
                                                    </div>

                                                    <div class="flex justify-between gap-10 items-center">
                                                        <label for="banios" class="text__label max-w-[50%]">
                                                            ¿Cuántas baños tienes?
                                                        </label>
                                                        <input type="number" id="banios"
                                                            class="text__input max-w-[50%]" />
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex gap-5 flex-col 2lg:flex-row justify-between items-center text-center">
                                                    <button href="#asesoria"
                                                        class="w-full lg:basis-8/12 button__base bg-bgButtonBaseGreen hover:bg-lime-600 md:duration-500">
                                                        Asesoría en WhatsApp
                                                    </button>

                                                    <div class="w-full 2lg:w-auto">
                                                        <button
                                                            class="firstNext next cursor-pointer flex gap-2 lg:basis-4/12 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full">
                                                            <span>Siguiente</span>
                                                            <div>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12"
                                                                        stroke="white" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page">
                                        <div class="px-10 h-full flex flex-col justify-center">
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
                                                    <div class="flex flex-col justify-between gap-10">
                                                        <label for="habitaciones" class="text__label">
                                                            ¿Cuántas m2 tiene tu departamento?
                                                        </label>
                                                        <input type="number" id="habitaciones" class="text__input" />
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex gap-5 flex-col 2lg:flex-row justify-between items-center text-center">
                                                    <a href="#asesoria"
                                                        class="w-full lg:basis-8/12 button__base bg-bgButtonBaseGreen hover:bg-lime-600 md:duration-500">
                                                        Asesoría en WhatsApp
                                                    </a>
                                                    <div class="w-full 2lg:w-auto">
                                                        <button
                                                            class="next-1 next cursor-pointer flex gap-2 lg:basis-4/12 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full">
                                                            <span>Siguiente</span>
                                                            <div>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12"
                                                                        stroke="white" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page">
                                        <div class="px-10 h-full flex flex-col justify-center">
                                            <div class="text-textAzul flex flex-col gap-10">
                                                <div>
                                                    <button class="prev-2 prev">
                                                        <span class="button-previo"></span>
                                                    </button>
                                                </div>
                                                <p class="text__cotizar leading-none md:leading-tight font-airbnb_700">
                                                    Calcula el precio de limpieza de tu Airbnb
                                                </p>
                                                <div class="flex flex-col gap-10">
                                                    <div class="flex flex-col justify-between gap-5 font-airbnb_500">
                                                        <label for="habitaciones" class="text__label">
                                                            Déjanos tu dirección
                                                        </label>
                                                        <input type="text" id="habitaciones" class="text__input font-airbnb_500"
                                                            placeholder="Avenida, Calle, Jiron, Pasaje..." />
                                                    </div>

                                                    <div class="flex flex-col justify-between gap-5">
                                                        <label class="text__label font-airbnb_500">
                                                            ¿Prefieres que nos comuniquemos por Teléfono o
                                                            Correo Electrónico?
                                                        </label>

                                                        <div class="flex gap-5 items-center">
                                                            <div class="flex items-center gap-2">
                                                                <input type="radio" id="opcion1" name="opcion"
                                                                    value="opcion1"
                                                                    class="w-5 h-5 accent-[#BFDE8E] cursor-pointer">
                                                                <label for="opcion1"
                                                                    class="text__label leading-none font-airbnb_500">WhatsApp</label>
                                                            </div>

                                                            <div class="flex items-center gap-2">
                                                                <input type="radio" id="opcion2" name="opcion"
                                                                    value="opcion2"
                                                                    class="w-5 h-5 accent-[#BFDE8E] cursor-pointer">
                                                                <label for="opcion2"
                                                                    class="text__label leading-none font-airbnb_500">Correo
                                                                    electrónico</label>
                                                            </div>




                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex gap-5 flex-col 2xl:flex-row justify-between items-center text-center">
                                                    <a href="#asesoria"
                                                        class="w-full 2xl:basis-7/12 button__base bg-bgButtonBaseGreen hover:bg-lime-600 md:duration-500">
                                                        Asesoría en WhatsApp
                                                    </a>

                                                    <div class="w-full 2xl:w-auto">
                                                        <button
                                                            class="next-2 next cursor-pointer flex gap-2 w-full 2xl:basis-5/12 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center">
                                                            <span>Enviar mi solicitud</span>
                                                            <div>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12"
                                                                        stroke="white" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
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
                                                    <p class="font-normal text-text16 md:text-text24">
                                                        Basándonos en la información proporcionada, tu
                                                        estimación de precio inicial es...
                                                    </p>
                                                    <p class="font-bold text-text48 md:text-text52">
                                                        s/ 150
                                                    </p>

                                                    <div>
                                                        <button
                                                            class="submit cursor-pointer flex gap-2 basis-4/12 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center"
                                                            type="submit">
                                                            <span>Adquirir el servicio</span>
                                                            <div>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12"
                                                                        stroke="white" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <!-- arros -->
                                                    <div>
                                                        <img src="{{ asset('images/img/imagen_22.png') }}"
                                                            alt="limpia bnb" class="absolute bottom-[5%] left-0">

                                                        <img src="{{ asset('images/img/imagen_23.png') }}"
                                                            alt="limpia bnb" class="absolute bottom-1/2 right-0">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="field btns">
                                            <button class="prev-3 prev">Previous</button>
                                            <button class="submit">Submit</button>
                                        </div> --}}
                                    </div>
                                </form>
                            </div>

                            <div class="absolute top-0 hidden corona-top">
                                <img src="./images/img/imagen_28.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pb-10 pt-44" data-aos="fade-up" data-aos-offset="150">
                    <div class="swiper servicios__header">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide ">
                                <div class="flex gap-2 items-center justify-center">
                                    <div>
                                        <svg width="50" height="50" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.835 0.28125C20.5772 0.421875 19.1397 2.57031 17.3585 5.47656C12.3897 13.5938 9.38971 20.2109 8.58502 24.8203C8.28815 26.4922 8.36627 28.5312 8.78033 30.1406C9.95221 34.6406 13.4756 38.1875 17.9757 39.3984C19.1163 39.7109 19.8507 39.7969 21.2491 39.7969C22.6319 39.7969 23.3663 39.7109 24.5147 39.4141C28.546 38.3594 31.9288 35.2969 33.3428 31.4062C34.7491 27.5625 34.3038 23.9453 31.6553 17.6953C30.6241 15.25 28.3428 10.8125 26.6007 7.85156C24.8897 4.94531 22.1475 0.664062 21.8116 0.367188C21.5928 0.164062 21.1085 0.125 20.835 0.28125ZM23.335 5.97656C28.2725 13.9844 31.3038 20.5547 32.1553 25.0781C32.3272 25.9688 32.3428 27.8047 32.1944 28.6719C31.6163 32.0156 29.7647 34.7344 26.8897 36.4609C25.1553 37.5 23.3194 38 21.21 37.9922C19.9288 37.9844 19.0069 37.8438 17.835 37.4531C14.1085 36.2344 11.2725 33.0859 10.4288 29.2188C10.2256 28.2969 10.1866 26.2812 10.3428 25.3047C10.9991 21.3594 13.3506 15.9141 17.4835 8.82812C18.4913 7.10938 19.796 4.96875 20.7335 3.52344L21.2647 2.71094L21.8663 3.64062C22.1944 4.14844 22.8585 5.20312 23.335 5.97656Z"
                                                fill="#BFDE8E" />
                                            <path
                                                d="M28.8276 26.086C28.3041 26.2032 28.1557 26.4844 28.0463 27.5235C27.8744 29.2032 27.2963 30.4844 26.1791 31.6719C25.0307 32.8828 23.5463 33.5782 21.7338 33.75C20.8744 33.8282 20.7104 33.8985 20.5151 34.2266C20.3041 34.5782 20.351 35.0313 20.6166 35.2969C20.9135 35.5938 21.1401 35.6328 22.0541 35.5469C26.1869 35.1563 29.3979 31.9688 29.851 27.8203C29.9448 26.9297 29.8901 26.5391 29.6166 26.2969C29.4291 26.125 29.0776 26.0313 28.8276 26.086Z"
                                                fill="#BFDE8E" />
                                            <path
                                                d="M35.937 1.34422C35.5698 1.59422 35.476 1.90672 35.476 2.94579L35.4682 3.8286H34.5698C33.562 3.8286 33.2182 3.92235 32.9995 4.25829C32.8276 4.5161 32.8198 4.91454 32.9682 5.19579C33.1635 5.55516 33.4135 5.62547 34.476 5.62547H35.4526L35.4838 6.65672C35.5073 7.46922 35.5463 7.74266 35.6479 7.89891C36.0698 8.53172 37.062 8.3911 37.2651 7.67235C37.3042 7.5161 37.3432 6.98485 37.3432 6.50047V5.62547H38.3667C39.5307 5.62547 39.7573 5.53954 39.9214 5.03954C40.0385 4.67235 39.9604 4.36766 39.6792 4.09422C39.4448 3.86766 39.4292 3.86766 38.3979 3.84422L37.3588 3.81297L37.3276 2.7661L37.3042 1.71922L37.062 1.47704C36.726 1.14891 36.3042 1.09422 35.937 1.34422Z"
                                                fill="#BFDE8E" />
                                            <path
                                                d="M3.2887 28.6172C2.7887 28.7891 2.69495 29.0157 2.67151 30.2032L2.64026 31.25H1.6012C0.569948 31.25 0.562135 31.25 0.32776 31.4688C-0.10974 31.8828 -0.0706779 32.4844 0.413697 32.8438C0.60901 32.9844 0.76526 33.0078 1.64807 33.0313L2.65589 33.0625V33.9532C2.65589 34.8985 2.73401 35.2344 3.02307 35.4922C3.25745 35.6953 3.67932 35.7422 3.96839 35.5938C4.4137 35.3672 4.48401 35.1641 4.51526 34.0469L4.54651 33.0469H5.46058C6.52308 33.0469 6.83558 32.9375 7.05433 32.4922C7.2262 32.1328 7.1637 31.7813 6.85901 31.4766L6.62464 31.25H5.58558H4.54651L4.51526 30.211C4.49183 29.4063 4.45276 29.1328 4.3512 28.9766C4.11683 28.625 3.68714 28.4766 3.2887 28.6172Z"
                                                fill="#BFDE8E" />
                                        </svg>


                                    </div>
                                    <h2 class="font-airbnb_500 text-text16">
                                        Limpieza profunda y exhaustiva
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex gap-2 items-center justify-center">
                                    <div>
                                        <svg width="50" height="50" viewBox="0 0 38 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.68606 0.0857811C2.52427 0.311901 1.50283 1.23198 1.09737 2.40157C0.957016 2.81482 0.949219 3.34504 0.949219 20C0.949219 36.655 0.957016 37.1852 1.09737 37.5984C1.51062 38.7992 2.52427 39.6881 3.74844 39.922C4.32544 40.0312 33.6666 40.0312 34.2514 39.922C35.187 39.7505 36.2163 39.002 36.6217 38.2066C37.0818 37.3022 37.0506 38.5809 37.0506 20C37.0506 1.41911 37.0818 2.69786 36.6217 1.79338C36.2163 0.998062 35.187 0.249523 34.2514 0.0779839C33.729 -0.015583 4.18509 -0.015583 3.68606 0.0857811ZM34.2202 2.49514C34.7348 2.80703 34.7504 2.885 34.7504 5.61404V8.07018L18.9843 8.09358L3.21043 8.10917V5.67642C3.21043 2.95517 3.22602 2.86161 3.74844 2.51853L4.01355 2.33919H18.9921C33.7134 2.33919 33.9785 2.33919 34.2202 2.49514ZM34.7738 23.6023C34.7504 36.1793 34.7426 36.8577 34.6101 37.0994C34.5321 37.2398 34.3605 37.4269 34.2202 37.5049C33.9785 37.6608 33.7134 37.6608 18.9921 37.6608H4.01355L3.74844 37.4815C3.60029 37.3879 3.42095 37.1852 3.35078 37.037C3.21823 36.7797 3.21043 35.9766 3.21043 23.5634V10.3704H18.9999H34.7894L34.7738 23.6023Z"
                                                fill="#BFDE8E" />
                                            <path
                                                d="M23.8108 4.21017C23.4132 4.45188 23.2338 4.80276 23.2728 5.2706C23.2884 5.49672 23.3664 5.75403 23.4521 5.87099C23.7406 6.26865 23.959 6.31543 25.573 6.31543C26.9765 6.31543 27.0623 6.30763 27.304 6.13609C27.6003 5.94116 27.8498 5.51231 27.8498 5.22381C27.8498 4.88073 27.5223 4.34272 27.226 4.19457C26.9921 4.07761 26.727 4.05422 25.5106 4.05422C24.2085 4.05422 24.0447 4.06982 23.8108 4.21017Z"
                                                fill="#BFDE8E" />
                                            <path
                                                d="M29.9932 4.20335C29.5877 4.45286 29.463 4.65559 29.424 5.10783C29.4006 5.44311 29.424 5.58346 29.5566 5.79399C29.8451 6.26183 30.0634 6.31641 31.7242 6.31641C33.4318 6.31641 33.5877 6.26962 33.8684 5.64584C34.04 5.24038 34.0166 4.94409 33.7827 4.55422C33.5176 4.11758 33.2525 4.0552 31.654 4.0552C30.3987 4.0552 30.1959 4.07079 29.9932 4.20335Z"
                                                fill="#BFDE8E" />
                                            <path
                                                d="M17.9867 12.9438C14.6884 13.2635 11.819 14.9243 9.90088 17.6143C7.35897 21.1777 7.17183 25.973 9.43304 29.7469C11.4603 33.1387 15.0627 35.1738 19.0159 35.166C24.2869 35.1582 28.7703 31.5013 29.9165 26.2771C30.088 25.5052 30.1582 23.4623 30.0412 22.6124C29.5266 18.7761 27.0315 15.4311 23.5227 13.8561C21.9087 13.1309 19.7254 12.7722 17.9867 12.9438ZM20.9886 15.4311C22.743 15.8911 24.0139 16.5929 25.2069 17.7781C26.2128 18.7839 26.9379 19.9457 27.3824 21.2791C27.6943 22.2069 27.6865 22.2537 27.2888 22.3707C27.1017 22.4253 26.5481 22.6904 26.0568 22.9633C24.9808 23.5559 24.6299 23.6572 23.7644 23.6104C23.0627 23.5715 23.1562 23.6104 21.511 22.7449C20.6689 22.3083 19.9828 22.1446 18.9769 22.1446C18.0022 22.1446 17.1835 22.3473 16.396 22.7839C14.9925 23.5559 14.9379 23.5792 14.166 23.6104C13.3083 23.6494 12.973 23.5559 12.0607 23.0256C11.7176 22.8307 11.1952 22.5734 10.8911 22.4486C10.2596 22.1991 10.2751 22.2381 10.5948 21.2869C11.6943 18.0276 14.4389 15.7664 17.9087 15.2518C18.4779 15.166 20.4194 15.2752 20.9886 15.4311ZM20.0451 24.6007C20.2011 24.6553 20.6455 24.8814 21.0276 25.0997C22.1426 25.7391 22.9145 25.9652 23.9906 25.9652C25.0822 25.9652 25.8307 25.7391 26.9925 25.0763L27.7332 24.6475L27.7566 24.8502C27.8268 25.3804 27.398 26.9633 26.9145 27.9223C26.4857 28.7878 26.0334 29.4194 25.2927 30.1913C22.8054 32.7722 19.0393 33.5676 15.6943 32.2264C13.1835 31.2206 11.2654 29.0997 10.5091 26.4954C10.3297 25.8638 10.127 24.7177 10.1894 24.6553C10.205 24.6397 10.5091 24.7956 10.8677 25.0061C12.0217 25.6923 12.9106 25.9652 14.0256 25.9652C15.0861 25.9652 15.9594 25.6845 17.3629 24.8814C17.6826 24.7021 18.0958 24.5305 18.3375 24.4915C18.8366 24.4058 19.6397 24.4525 20.0451 24.6007Z"
                                                fill="#BFDE8E" />
                                        </svg>


                                    </div>
                                    <h2 class="font-airbnb_500 text-text16">
                                        Lavado de ropa de cama y toallas
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex gap-2 items-center justify-center">
                                    <div>
                                        <svg width="50" height="50" viewBox="0 0 41 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.59383 28.099L7.765 27.5395L7.765 27.5395L8.59383 28.099ZM10.4106 22.3024L9.41055 22.2915V22.3024H10.4106ZM10.4487 18.7977L11.4487 18.8086V18.7977H10.4487ZM33.2678 28.1271L34.1073 27.5837L34.1073 27.5837L33.2678 28.1271ZM31.5195 22.3024L30.5195 22.2909V22.3024H31.5195ZM31.5576 18.9714L32.5576 18.9828V18.9714H31.5576ZM16.7603 34C16.208 34 15.7603 34.4477 15.7603 35C15.7603 35.5523 16.208 36 16.7603 36V34ZM25.0917 36C25.6439 36 26.0917 35.5523 26.0917 35C26.0917 34.4477 25.6439 34 25.0917 34V36ZM6.65508 10.2768C6.45887 10.7931 6.71831 11.3706 7.23456 11.5668C7.75082 11.7631 8.32839 11.5036 8.5246 10.9874L6.65508 10.2768ZM12.7774 5.86946C13.2576 5.59662 13.4257 4.98618 13.1528 4.50599C12.88 4.0258 12.2696 3.85771 11.7894 4.13054L12.7774 5.86946ZM30.0334 4.15115C29.5562 3.87309 28.944 4.0345 28.6659 4.51168C28.3879 4.98886 28.5493 5.60111 29.0265 5.87917L30.0334 4.15115ZM33.3181 10.9624C33.5091 11.4806 34.0839 11.746 34.6022 11.5551C35.1204 11.3642 35.3858 10.7893 35.1949 10.2711L33.3181 10.9624ZM9.42265 28.6585C10.4279 27.1694 11.4106 24.9691 11.4106 22.3024H9.41055C9.41055 24.473 8.60864 26.2898 7.765 27.5395L9.42265 28.6585ZM11.4105 22.3133L11.4486 18.8086L9.44874 18.7868L9.41061 22.2915L11.4105 22.3133ZM34.1073 27.5837C33.2981 26.3337 32.5195 24.5004 32.5195 22.3024H30.5195C30.5195 24.975 31.4638 27.1806 32.4284 28.6706L34.1073 27.5837ZM32.5194 22.3138L32.5575 18.9828L30.5576 18.9599L30.5195 22.2909L32.5194 22.3138ZM32.5576 18.9714C32.5576 11.9259 27.4576 6.00761 20.926 6.00761V8.00761C26.1377 8.00761 30.5576 12.802 30.5576 18.9714H32.5576ZM32.6316 30.7514C33.5483 30.7514 34.0737 30.0406 34.2725 29.5149C34.4795 28.9678 34.5143 28.2125 34.1073 27.5837L32.4284 28.6705C32.4123 28.6457 32.4208 28.6437 32.4227 28.6811C32.4246 28.7186 32.4177 28.7657 32.4019 28.8073C32.3851 28.8516 32.3731 28.8526 32.3972 28.8313C32.4113 28.8189 32.4388 28.7983 32.4816 28.7808C32.5259 28.7626 32.5777 28.7514 32.6316 28.7514V30.7514ZM11.4487 18.7977C11.4487 12.7243 15.7995 8.00761 20.926 8.00761V6.00761C14.4795 6.00761 9.44868 11.8482 9.44868 18.7977H11.4487ZM9.2219 28.7514C9.27696 28.7514 9.32985 28.763 9.37483 28.7818C9.41808 28.7999 9.44543 28.8208 9.45889 28.8329C9.48162 28.8534 9.46789 28.85 9.45029 28.8021C9.43373 28.7569 9.42696 28.7068 9.42938 28.6676C9.4318 28.6284 9.44077 28.6317 9.42265 28.6585L7.765 27.5395C7.33916 28.1703 7.37006 28.9387 7.57267 29.4909C7.76666 30.0197 8.29081 30.7514 9.2219 30.7514V28.7514ZM32.6316 28.7514H9.2219V30.7514H32.6316V28.7514ZM16.7603 36H25.0917V34H16.7603V36ZM8.5246 10.9874C9.36334 8.7806 10.8561 6.96112 12.7774 5.86946L11.7894 4.13054C9.42256 5.47532 7.64155 7.68137 6.65508 10.2768L8.5246 10.9874ZM29.0265 5.87917C30.9859 7.02097 32.522 8.80095 33.3181 10.9624L35.1949 10.2711C34.2322 7.65779 32.3797 5.51839 30.0334 4.15115L29.0265 5.87917Z"
                                                fill="#BFDE8E" />
                                        </svg>

                                    </div>
                                    <h2 class="font-airbnb_500 text-text16">
                                        Servicio de "turnover" rápido y eficiente
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="servicios" data-aos="fade-up" data-aos-offset="150">
            <div class="swiper servicios__principales text-textAzul">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex flex-col lg:flex-row gap-10 md:gap-0">
                            <div class="basis-1/2 order-2 md:order-1">

                                <img src="{{ asset('images/img/servicio_limpieza.png') }}" alt="limpieza"
                                    class="w-full h-full">


                            </div>
                            <div
                                class="flex flex-col md:gap-32 basis-1/2 order-1 md:order-2 md:p-12 w-11/12 md:w-full mx-auto">
                                <div class="py-12 md:w-5/6 md:mx-auto">
                                    <div class="buttonSliderServicios">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="text-textAzul flex flex-col gap-5 md:w-5/6 mx-auto" data-aos="fade-up"
                                    data-aos-offset="150">
                                    <h2 class="font-airbnb_700 text-text40 2md:text-text52 leading-none md:leading-tight">
                                        Limpieza y lavandería de airbnbs con reposición de
                                        ammenities hoteleros
                                    </h2>
                                    <p class="font-airbnb_400 text-text16 2md:text-text20">
                                        No te preocupes por la logística, nos encargamos del
                                        lavado y reposición de la ropa de cama y toallas.
                                    </p>

                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col gap-3">
                                            <h3
                                                class="font-airbnb_500 text-text18 2md:text-text24 leading-none md:leading-tight">
                                                Limpieza del AirBnB
                                            </h3>
                                            <p class="font-airbnb_400 text-text16 2md:text-text20">
                                                Limpieza del airbnb, con cambio de ropa de cama y
                                                toallas. reponemos jabón, shampoo, PH premium, esponja
                                                y trapo de cocina. Podemos añadir otras cosas de ser
                                                conversado previamente con el cliente.
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <h3
                                                class="font-airbnb_500 text-text18 2md:text-text24 leading-none md:leading-tight">
                                                Inventario
                                            </h3>
                                            <p class="font-airbnb_400 text-text16 2md:text-text20">
                                                Hacemos un inventario del departamento y reportamos si
                                                algo falta o está roto.
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <h3
                                                class="font-airbnb_500 text-text18 2md:text-text24 leading-none md:leading-tight">
                                                Reporte
                                            </h3>
                                            <p class="font-normal text-text16 2md:text-text20">
                                                Entregamos un reporte fotográfico de como recibimos y
                                                como dejamos el departamento.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col md:flex-row items-center">
                                        <a
                                            class="cursor-pointer flex gap-2 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto font-airbnb_500">
                                            Solicitar servicio
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col lg:flex-row gap-5">
                            <div class="basis-1/2 order-2 md:order-1">
                                <img src="{{ asset('images/img/solo_limpieza.png') }}" alt="limpieza"
                                    class="w-full h-full">

                            </div>
                            <div
                                class="flex flex-col md:gap-32 basis-1/2 order-1 md:order-2 md:p-12 w-11/12 md:w-full mx-auto">
                                <div class="py-6 md:py-12 md:w-5/6 md:mx-auto">
                                    <div class="buttonSliderServicios">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="text-textAzul flex flex-col gap-5 md:w-5/6 mx-auto" data-aos="fade-up"
                                    data-aos-offset="150">
                                    <h2 class="font-airbnb_700 text-text40 2md:text-text52 leading-none md:leading-tight">
                                        Solo limpieza
                                    </h2>
                                    <p class="font-airbnb_400 text-text16 2md:text-text20">
                                        Ponemos al personal y tú nos entregas la ropa de cama
                                        limpia, productos de limpieza y ammenities hoteleros
                                    </p>

                                    <div class="flex flex-col md:flex-row items-center">
                                        <a
                                            class="cursor-pointer flex gap-2 button__base font-airbnb_500 bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto">
                                            Solicitar servicio
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col lg:flex-row gap-5">
                            <div class="basis-1/2 order-2 md:order-1">
                                <img src="{{ asset('images/img/solo_lavanderia.png') }}" alt="lavanderia"
                                    class="w-full h-full">

                            </div>
                            <div
                                class="flex flex-col md:gap-32 basis-1/2 order-1 md:order-2 md:p-12 w-11/12 md:w-full mx-auto">
                                <div class="py-6 md:py-12 md:w-5/6 md:mx-auto">
                                    <div class="buttonSliderServicios">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="text-textAzul flex flex-col gap-5 md:w-5/6 mx-auto" data-aos="fade-up"
                                    data-aos-offset="150">
                                    <h2 class="font-airbnb_700 text-text40 2md:text-text52 leading-none md:leading-tight">
                                        Solo lavandería
                                    </h2>
                                    <p class="font-airbnb_400 text-text16 2md:text-text20">
                                        Nos dejas tu ropa de cama y te la entregamos al día
                                        siguiente!
                                    </p>

                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col gap-3">
                                            <h3
                                                class="font-airbnb_500 text-text18 2md:text-text24 leading-none md:leading-tight">
                                                Entrega
                                            </h3>
                                            <p class="font-airbnb_400 text-text16 2md:text-text20">
                                                Se recoje y deja en miraflores y por un costo extra
                                                podemos hacer delivery tambien.
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <h3
                                                class="font-airbnb_500 text-text18 2md:text-text24 leading-none md:leading-tight">
                                                Lavado
                                            </h3>
                                            <p class="font-airbnb_400 text-text16 2md:text-text20">
                                                Lavada secada y planchada. Contamos estandar de
                                                hotelería 5 estrellas.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col md:flex-row items-center">
                                        <a
                                            class="cursor-pointer flex gap-2 button__base font-airbnb_500 bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto">
                                            Solicitar servicio
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col lg:flex-row gap-5">
                            <div class="basis-1/2 order-2 md:order-1">
                                <img src="{{ asset('images/img/limpieza_desinfeccion.png') }}"
                                    alt="limpieza y desinfección" class="w-full h-full">

                            </div>
                            <div
                                class="flex flex-col md:gap-32 basis-1/2 order-1 md:order-2 md:p-12 w-11/12 md:w-full mx-auto">
                                <div class="py-6 md:py-12 md:w-5/6 md:mx-auto">
                                    <div class="buttonSliderServicios">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                                <div class="text-textAzul flex flex-col gap-5 md:w-5/6 mx-auto" data-aos="fade-up"
                                    data-aos-offset="150">
                                    <h2 class="font-airbnb_700 text-text40 2md:text-text52 leading-none md:leading-tight">
                                        Limpieza y desinfección de sofás y colchones
                                    </h2>
                                    <p class="font-airbnb_400 text-text16 2md:text-text20">
                                        Lavamos y desinfectamos tus colchones con aspiradoras
                                        Karcher, dejamos tu colchon limio en tiempo record.
                                    </p>

                                    <div class="flex flex-col md:flex-row items-center">
                                        <a
                                            class="cursor-pointer flex gap-2 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto font-airbnb_500">
                                            Solicitar servicio
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pasos" data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col lg:flex-row gap-10 md:gap-0 my-12 md:my-0">
                <div class="basis-1/2 flex flex-col justify-center gap-10 md:py-16 md:pl-24 w-11/12 md:w-full mx-auto">
                    <div class="before__underline before__underline-step">
                        <p class="text-[#BFDE8E] text-text18 2md:text-text24 font-airbnb_500">
                            Paso a Paso
                        </p>
                    </div>
                    <h2 class="font-airbnb_700 text-text32 2md:text-text48 text-textAzul leading-none md:leading-tight">
                        Tu camino hacia un Airbnb Impecable
                    </h2>
                    <p class="font-airbnb_400 text-text16 2md:text-text20 text-textAzul">
                        Descubre lo fácil que es obtener un espacio impecable para tus
                        huéspedes. Sigue nuestro sencillo proceso paso a paso y disfruta
                        de servicios personalizados para tu propiedad en Airbnb. ¡La
                        excelencia en la limpieza está a solo unos clics de distancia!
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
                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" id="firstIcon"
                                                class="group-hover:stroke-bgWhite md:duration-500" />
                                        </svg>
                                    </div>
                                    <div data-aos="fade-up" data-aos-offset="150">
                                        <h6 class="font-airbnb_700 text-text24 2md:text-text32">
                                            Comienza el Cálculo
                                        </h6>
                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            Haz clic en el botón "¡Obtener una Cotización
                                            Personalizada!" para iniciar el proceso.
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
                                            <circle cx="26" cy="26" r="26" fill="#F8FBFD"
                                                id="secondCircle" class="group-hover:fill-bgAzul md:duration-500" />
                                            <path
                                                d="M25.9996 35.5554H19.9996C18.6741 35.5554 17.5996 34.4809 17.5996 33.1554L17.5997 18.7555C17.5997 17.43 18.6742 16.3555 19.9997 16.3555H30.8C32.1255 16.3555 33.2 17.43 33.2 18.7555V22.9555M29.6 30.0131C29.6 28.7164 30.6745 27.6652 32 27.6652C33.3255 27.6652 34.4 28.7164 34.4 30.0131C34.4 31.3098 33.3255 32.3609 32 32.3609M32 35.6456V35.5554M21.8 21.1555H29M21.8 24.7555H29M21.8 28.3555H25.4"
                                                stroke="#66AAD8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" id="secondIcon"
                                                class="group-hover:stroke-strokeWithe md:duration-500" />
                                        </svg>
                                    </div>

                                    <div data-aos="fade-up" data-aos-offset="150">
                                        <h6 class="font-airbnb_700 text-text24 2md:text-text32">
                                            Responder Preguntas
                                        </h6>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            Responde algunas preguntas rápidas sobre tu propiedad y
                                            necesidades.
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
                                            <circle cx="26" cy="26" r="26" fill="#F8FBFD"
                                                id="thirdsCircle" class="group-hover:fill-bgAzul md:duration-500" />
                                            <path
                                                d="M18.5 24.5H17V33.5C17 34.3284 17.6716 35 18.5 35H33.5C34.3284 35 35 34.3284 35 33.5V24.5H33.5M18.5 24.5L26 29L33.5 24.5M18.5 24.5V20C18.5 18.3431 19.8431 17 21.5 17H30.5C32.1569 17 33.5 18.3431 33.5 20V24.5"
                                                stroke="#66AAD8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" id="thirdsIcon"
                                                class="group-hover:stroke-strokeWithe md:duration-500" />
                                        </svg>
                                    </div>

                                    <div data-aos="fade-up" data-aos-offset="150">
                                        <h6 class="font-airbnb_700 text-text24 2md:text-text32">
                                            Recibe tu Cotización
                                        </h6>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            En minutos, recibirás una cotización personalizada
                                            basada en tus respuestas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="flex items-center justify-start w-full h-full">
                        <a
                            class="cursor-pointer flex gap-2 button__base font-airbnb_500 bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto md:text-text16 text-center">
                            Obtener una Cotización
                        </a>
                    </div>
                </div>
                <div class="basis-1/2 flex justify-end items-center relative">

                    <img src="{{ asset('images/img/image_3.png') }}" alt="limpieza" class="w-full md:w-[90%] h-full">
                    <img src="{{ asset('images/img/image_7.png') }}" alt="limpieza"
                        class="absolute bottom-0 right-0 w-32 md:w-auto">

                </div>
            </div>
        </section>

        <section class="w-11/12 mx-auto text-textAzul" data-aos="fade-up" data-aos-offset="150">
            <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2">
                <div class="col-span-1 md:col-span-3 order-1 flex flex-col justify-center">
                    <div class="flex flex-col gap-5">
                        <div class="before__underline before__underline-step">
                            <p class="text-[#BFDE8E] text-text18 2md:text-text24 font-airbnb_500">
                                Testimonios
                            </p>
                        </div>
                        <h3 class="text-text48 2md:text-text68 font-airbnb_700 leading-none md:leading-tight">
                            Experiencias Inolvidables
                        </h3>
                        <p class="font-airbnb_400 text-text16 2md:text-text24">
                            Descubre lo que dicen nuestros clientes satisfechos sobre la
                            transformación de sus espacios y la calidad de nuestros
                            servicios.
                        </p>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-1 order-3 md:order-2">
                    <div class="flex items-center justify-end w-full h-full">
                        <a
                            class="cursor-pointer flex gap-2 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full md:w-auto md:text-text16 text-center font-airbnb_500">
                            Obtener una Cotización
                        </a>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-4 order-2 md:order-3 relative">
                    <div>
                        <div class="swiper testimonios">
                            <div class="swiper-wrapper pt-24 md:pt-0">
                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5 bg-[#F8FBFD] p-5 rounded-lg">
                                        <p class="font-airbnb_700 text-[20px] 2md:text-text32 leading-none">
                                            Ademir Neyra.
                                        </p>

                                        <div class="flex gap-2 py-2">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">
                                            <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella">

                                        </div>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            "Gracias a LimpiaBnB, mi Airbnb siempre está impecable.
                                            Los huéspedes siempre elogian la limpieza y la frescura
                                            de mi lugar."
                                        </p>

                                        <p class="font-airbnb_400 text-[16px] 2md:text-text20">
                                            26 de noviembre, 2023
                                        </p>
                                    </div>
                                </div>


                                

                                
                            </div>

                            <div class="flex justify-end items-center buttonSliderTestimonios">
                                <div class="swiper-button-next siguiente"></div>
                                <div class="swiper-button-prev anterior"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="nosotros" data-aos="fade-up" data-aos-offset="150">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 my-12">
                <div
                    class="lg:col-span-1 relative bg-bgAzul text-textWhite flex justify-center items-center py-24 md:py-0">
                    <div class="z-10 relative w-5/6 flex flex-col gap-10 py-5">
                        <div class="before__underline">
                            <p class="text-text18 2md:text-text24 font-airbnb_500">
                                Nuestra historia
                            </p>
                        </div>
                        <h2 class="font-airbnb_700 text-text40 2md:text-text52 leading-none md:leading-tight">
                            De Servicio de Administración a Líder en Limpieza: El
                            Surgimiento de Limpia BnB
                        </h2>

                        <p class="font-airbnb_400 text-text16 2md:text-text20">
                            Limpia BnB nace de Ventura BnB, una empresa de administración de
                            departamentos a corto plazo, la cual creó y calibró un equipo de
                            limpieza con tan buenos resultados, que en cuestión de poco
                            tiempo estaba limpiando los airbnbs de otros anfitriones.
                        </p>
                    </div>

                    <img src="{{ asset('images/img/image_6.png') }}" alt="limpieza" class="absolute top-0 left-0 z-0">

                </div>

                <div class="lg:col-span-1 hidden lg:block">
                    <div class="w-full h-full">
                        <img src="{{ asset('images/img/image_4.png') }}" alt="limpieza" class="w-full h-full">

                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="w-full h-full">
                        <img src="{{ asset('images/img/EquipoLimpia.png') }}" alt="limpieza" class="w-full h-full">

                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" data-aos="fade-up" data-aos-offset="150">
            <div class="w-11/12 mx-auto text-textAzul my-12">
                <div class="flex flex-col lg:flex-row gap-12 lg:gap-32">
                    <div class="basis-1/2 flex flex-col gap-8">
                        <div class="before__underline before__underline-contacto">
                            <p class="text-text18 2md:text-text24 font-airbnb_500 text-textCeleste">
                                Contacto
                            </p>
                        </div>
                        <h3 class="font-airbnb_700 text-text32 2md:text-text40 leading-none 2md:leading-tight">
                            ¿Listo para brindar a tus huéspedes una experiencia inolvidable
                        </h3>

                        <p class="font-airbnb_400 text-text16 2md:text-text20">
                            Comienza ahora y descubre el valor de nuestros servicios.
                        </p>

                        <p class="font-airbnb_700 text-text32 2md:text-text40 leading-none 2md:leading-tight">
                            Déjanos tus datos y consulta
                        </p>

                        <form action="#">
                            <div class="flex flex-col gap-5 font-airbnb_400">
                                <div class="flex flex-col md:flex-row gap-5">
                                    <input type="text" placeholder="Nombres"
                                        class="outline-none py-3 2md:py-4 basis-1/2 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]" />

                                    <input type="text" placeholder="Apellidos"
                                        class="outline-none py-3 2md:py-4 basis-1/2 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]" />
                                </div>
                                <div class="flex flex-col md:flex-row gap-5">
                                    <input type="email" placeholder="Correo Electrónico"
                                        class="outline-none py-3 2md:py-4 basis-1/2 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]" />

                                    <input type="text" placeholder="Número de Teléfono"
                                        class="outline-none py-3 2md:py-4 basis-1/2 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]" />
                                </div>

                                <div>
                                    <textarea name="comentario" id="" cols="30" rows="5" placeholder="comentario"
                                        class="outline-none py-3 2md:py-4 border-[1.5px] border-[#ADC3D2] rounded-lg px-2 w-full font-normal text-text16 2md:text-text20 placeholder:text-[#8D979C] text-[#004472]"></textarea>
                                </div>

                                <div class="flex flex-col justify-between gap-5">
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
                                </div>





                                <div class="mt-10">
                                    <button type="submit"
                                        class="firstNext next cursor-pointer flex gap-2 lg:basis-4/12 button__base bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center button__base-padding w-full md:w-auto font-airbnb_500">
                                        <span>Enviar</span>
                                        <div>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12"
                                                    stroke="white" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="basis-1/2">
                        <div class="flex flex-col h-full justify-center gap-10">
                            <h4 class="font-airbnb_700 text-text40 2md:text-text48 leading-none 2md:leading-tight">
                                Conéctate con Nosotros
                            </h4>
                            <p class="text-text16 font-airbnb_400 2md:text-text20">
                                Estamos aquí para responder a tus preguntas y personalizar
                                nuestros servicios según tus necesidades. ¡Contáctanos hoy
                                para llevar tu experiencia Airbnb al siguiente nivel!
                            </p>

                            <div class="flex flex-col gap-5 text-colorSubtitleLittle">
                                <div class="flex gap-2">
                                    <img src="{{ asset('images/svg/direccion.svg') }}" alt="direccion"
                                        class="h-7 w-7 2md:h-10 2md:w-10">

                                    <div>
                                        <p class="font-airbnb_500 text-text18 2md:text-text24 leading-none">
                                            Dirección
                                        </p>
                                        <p class="font-airbnb_400 text-text16 2md:text-text20">
                                            Calle Independencia 360 Miraflores
                                        </p>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <img src="{{ asset('images/svg/numero.svg') }}" alt="numero"
                                        class="h-7 w-7 2md:h-10 2md:w-10">

                                    <div>
                                        <p class="font-airbnb_500 text-text18 2md:text-text24 leading-none">
                                            Número de Teléfono
                                        </p>

                                        <a href="#" class="font-airbnb_400 text-text16 2md:text-text20">+51 931 359
                                            996</a>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <img src="{{ asset('images/svg/email.svg') }}" alt="email"
                                        class="h-7 w-7 2md:h-10 2md:w-10 ">

                                    <div>
                                        <p class="font-airbnb_500 text-text18 2md:text-text24 leading-none">
                                            Correo Electrónico
                                        </p>
                                        <a href="#"
                                            class="font-airbnb_400 text-text16 2md:text-text20">info@limpiabnb.pe</a>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <img src="{{ asset('images/svg/atencion.svg') }}" alt="direccion"
                                        class="h-7 w-7 2md:h-10 2md:w-10">

                                    <div>
                                        <p class="font-airbnb_500 text-text18 2md:text-text24 leading-none">
                                            Horario de Atención
                                        </p>
                                        <p class="font-airbnb_400 text-text16 2md:text-text20">
                                            Lunes a Viernes: 9:00 AM - 6:00 PM
                                        </p>
                                        <p class="font-airbnb_400 text-text16 2md:text-text20">
                                            Domingo: 10:00 AM - 5:00 PM
                                        </p>
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
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },

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
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                //allowSlideNext: false,  //Bloquea el deslizamiento hacia el siguiente slide
                //allowSlidePrev: false,  //Bloquea el deslizamiento hacia el slide anterior
                allowTouchMove: false, // Bloquea el movimiento táctil
                /* autoplay: {
                  delay: 1500,
                  disableOnInteraction: false,
                }, */
            });

            var testimonios = new Swiper(".testimonios", {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                grabCursor: true,
                centeredSlides: false,
                initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                allowTouchMove: true, // Bloquea el movimiento táctil
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },

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

            const one = document.querySelector(".one");
            const two = document.querySelector(".two");
            const three = document.querySelector(".three");
            const firstIcon = document.querySelector("#firstIcon");
            const firstCircle = document.querySelector("#firstCircle");
            const secondIcon = document.querySelector("#secondIcon");
            const secondCircle = document.querySelector("#secondCircle");
            const thirdsIcon = document.querySelector("#thirdsIcon");
            const thirdsCircle = document.querySelector("#thirdsCircle");


            let stepOne = null;
            let stepTwo = null;
            let stepThree = null;

            one.onclick = function() {
                stepOne = 1;
                one.classList.add("active");
                two.classList.remove("active");
                three.classList.remove("active");

                if (stepOne < stepTwo || stepOne < stepThree) {
                    secondIcon.setAttribute("stroke", "#66AAD8");
                    secondCircle.setAttribute("fill", "#F8FBFD");
                    thirdsIcon.setAttribute("stroke", "#66AAD8");
                    thirdsCircle.setAttribute("fill", "#F8FBFD");
                }
                if (stepOne < stepTwo && stepOne < stepThree) {
                    stepTwo = null;
                    stepThree = null;
                }
            };

            two.onclick = function() {
                stepTwo = 2;
                one.classList.add("active");
                two.classList.add("active");
                three.classList.remove("active");
                secondIcon.setAttribute("stroke", "#ffffff");
                secondCircle.setAttribute("fill", "#0071be");

                if (stepTwo < stepThree || stepTwo > stepOne) {
                    thirdsIcon.setAttribute("stroke", "#66AAD8");
                    thirdsCircle.setAttribute("fill", "#F8FBFD");

                    firstIcon.setAttribute("stroke", "#ffffff");
                    firstCircle.setAttribute("fill", "#0071be");
                }
            };

            three.onclick = function() {
                stepThree = 3;
                one.classList.add("active");
                two.classList.add("active");
                three.classList.add("active");

                thirdsIcon.setAttribute("stroke", "#ffffff");
                thirdsCircle.setAttribute("fill", "#0071be");

                if (stepThree > stepTwo || stepThree > stepOne) {
                    firstIcon.setAttribute("stroke", "#ffffff");
                    firstCircle.setAttribute("fill", "#0071be");
                    secondIcon.setAttribute("stroke", "#ffffff");
                    secondCircle.setAttribute("fill", "#0071be");
                }
            };

            /* progresbar */
            const slidePage = document.querySelector(".slide-page");
            const nextBtnFirst = document.querySelector(".firstNext");
            const prevBtnSec = document.querySelector(".prev-1");
            const nextBtnSec = document.querySelector(".next-1");
            const prevBtnThird = document.querySelector(".prev-2");
            const nextBtnThird = document.querySelector(".next-2");
            /* const prevBtnFourth = document.querySelector(".prev-3"); */
            const submitBtn = document.querySelector(".submit");
            const bullet = document.querySelectorAll(".step .bullet");
            const progress = document.querySelector(".progress-bar");
            const corona = document.querySelector(".corona-top");

            let current = 2; // Estado inicial

            nextBtnFirst.addEventListener("click", function(event) {
                event.preventDefault();
                slidePage.style.marginLeft = "-25%";
                bullet[current - 1].classList.add("active");
                current += 1;
            });
            nextBtnSec.addEventListener("click", function(event) {
                event.preventDefault();
                slidePage.style.marginLeft = "-50%";
                bullet[current - 1].classList.add("active");
                current += 1;
            });
            nextBtnThird.addEventListener("click", function(event) {
                event.preventDefault();
                slidePage.style.marginLeft = "-75%";
                bullet[current - 1].classList.add("active");
                // current -> indica la cantidad de bullets
                if (current === 4) {
                    progress.classList.add("opacity-0");
                    corona.classList.remove('hidden');
                }
            });
            submitBtn.addEventListener("click", function(event) {
                event.preventDefault();
                // Enviar datos al servidor
                //.....

                // Reiniciamos las condicionees iniciales
                current = 2;
                progress.classList.remove("opacity-0");
                progress.classList.add("opacity-1");

                bullet.forEach((step, index) => {
                    if (index !== 0) {
                        step.classList.remove("active");
                    }
                });
                slidePage.style.marginLeft = "0%";
                corona.classList.add('hidden');
            });

            prevBtnSec.addEventListener("click", function(event) {
                event.preventDefault();
                slidePage.style.marginLeft = "0%";
                bullet[current - 2].classList.remove("active");
                current -= 1;
            });
            prevBtnThird.addEventListener("click", function(event) {
                event.preventDefault();
                slidePage.style.marginLeft = "-25%";
                bullet[current - 2].classList.remove("active");
                current -= 1;
            });
            /*  prevBtnFourth.addEventListener("click", function(event) {
                 event.preventDefault();
                 slidePage.style.marginLeft = "-50%";
                 bullet[current - 2].classList.remove("active");
                 current -= 1;
             }); */
        });
    </script>
@stop

@stop
