@extends('components.public.matrix')

@section('css_improtados')

    <style>
        .header__hidden {
            display: none;
        }
    </style>

@stop


@section('content')
    <main>
        <div>
            <div class="text-textCeleste font-airbnb_700 text-text16 pt-10 w-[90%] mx-auto">
                <a href="{{ route('index') }}" class="flex gap-2 items-center justify-end ">
                    <div>
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.8892 10.167L9.33366 16.0003M9.33366 16.0003L14.8892 21.8337M9.33366 16.0003L22.667 16.0003"
                                stroke="#0071BE" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span>Volver</span>
                </a>
            </div>

            <div class="contenedor bg-white rounded-lg pb-12 mx-auto">
                <div class="progress-bar flex justify-center gap-5">
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
                    <form action="" id="formCotizacionMobile">
                        <div class="page slide-page">
                            <div class="px-5 h-full flex flex-col justify-center">
                                <div class="text-textAzul flex flex-col gap-10">
                                    <h4 class="text__cotizar font-airbnb_700 leading-none md:leading-tight">
                                        Calcula el precio de limpieza de tu Airbnb
                                    </h4>
                                    <div class="flex flex-col gap-5">
                                        <div class="flex justify-between gap-10 items-center">
                                            <label for="habitaciones" class="text__label font-airbnb_500 max-w-[50%]">
                                                ¿Cuántas habitaciones tienes?
                                            </label>
                                            <input required name="habitaciones" type="number" id="habitaciones" class="text__input max-w-[50%]" />
                                        </div>

                                        <div class="flex justify-between gap-10 items-center">
                                            <label for="camas" class="text__label basis-1/2 font-airbnb_500">
                                                ¿Cuántas camas tienes?
                                            </label>
                                            <input required name="camas" type="number" id="camas" class="text__input max-w-[50%]" />
                                        </div>

                                        <div class="flex justify-between gap-10 items-center">
                                            <label for="banios" class="text__label max-w-[50%] font-airbnb_500">
                                                ¿Cuántas baños tienes?
                                            </label>
                                            <input required name="banios" type="number" id="banios" class="text__input max-w-[50%]" />
                                        </div>
                                    </div>

                                    <div class="flex gap-5 flex-col 2lg:flex-row justify-between items-center text-center">
                                        <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}" target="_blank"
                                            class="w-full lg:basis-8/12 button__base button__base-form font-airbnb_500 bg-bgButtonBaseGreen hover:bg-lime-600 md:duration-500">
                                            Asesoría en WhatsApp
                                        </a>

                                        <div class="w-full 2lg:w-auto">
                                            <button
                                                class="firstNext next cursor-pointer font-airbnb_500 flex gap-2 lg:basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full">
                                                <span>Siguiente</span>
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
                                </div>
                            </div>
                        </div>
                        <div class="page">
                            <div class="px-5 h-full flex flex-col justify-center">
                                <div class="text-textAzul flex flex-col gap-10">
                                    <div>
                                        <button class="prev-1 prev">
                                            <span class="button-previo"></span>
                                        </button>
                                    </div>

                                    <h4 class="text__cotizar font-airbnb_700 leading-none md:leading-tight">
                                        Calcula el precio de limpieza de tu Airbnb
                                    </h4>
                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col justify-between gap-5">
                                            <label for="metros" class="text__label font-airbnb_500">
                                                ¿Cuántas m2 tiene tu departamento?
                                            </label>
                                            <input required name="metros" type="number" id="metros" class="text__input" />
                                        </div>
                                    </div>

                                    <div class="flex gap-5 flex-col 2lg:flex-row justify-between items-center text-center">
                                        <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}" target="_blank"
                                            class="w-full lg:basis-8/12 font-airbnb_500 button__base button__base-form bg-bgButtonBaseGreen hover:bg-lime-600 md:duration-500">
                                            Asesoría en WhatsApp
                                        </a>
                                        <div class="w-full 2lg:w-auto">
                                            <button
                                                class="next-1 next cursor-pointer font-airbnb_500 flex gap-2 lg:basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center w-full">
                                                <span>Siguiente</span>
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
                                </div>
                            </div>
                        </div>
                        <div class="page">
                            <div class="px-5 h-full flex flex-col justify-center">
                                <div class="text-textAzul flex flex-col gap-10">
                                    <div>
                                        <button class="prev-2 prev">
                                            <span class="button-previo"></span>
                                        </button>
                                    </div>
                                    <h4 class="text__cotizar  font-airbnb_700 leading-none md:leading-tight">
                                        Calcula el precio de limpieza de tu Airbnb
                                    </h4>
                                    <div class="flex flex-col gap-10">
                                        <div class="flex flex-col justify-between gap-5">
                                            <label for="habitaciones" class="text__label font-airbnb_500">
                                                Déjanos tu dirección
                                            </label>
                                            <input required name="direction" type="text" id="direction" class="text__input"
                                                placeholder="Avenida, Calle, Jiron, Pasaje..." />
                                        </div>
                                    </div>

                                    <div class="flex gap-5 flex-col 2xl:flex-row justify-between items-center text-center">
                                        <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}" target="_blank"
                                            class="w-full 2xl:basis-7/12 button__base button__base-form bg-bgButtonBaseGreen hover:bg-lime-600 md:duration-500">
                                            Asesoría en WhatsApp
                                        </a>

                                        <div class="w-full 2xl:w-auto">
                                            <button
                                                class="next-2 next cursor-pointer flex gap-2 w-full 2xl:basis-5/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center">
                                                <span>Enviar mi solicitud</span>
                                                <div>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page relative">
                            <div class="flex flex-col justify-center relative">
                                <div class="text-textAzul flex flex-col gap-5 ">


                                    <div class="flex flex-col gap-5 justify-center items-center text-center ">
                                        <div>
                                            <img src="{{ asset('images/img/image_8.png') }}" alt=""
                                                class="w-24 h-24 md:w-36 md:h-36">


                                        </div>
                                        <p class="font-airbnb_700 text-text28 md:text-text32 2md:text-text40 w-11/12 mx-auto">
                                            ¡Éxito! Hemos recibido tu información
                                        </p>
                                        <p class="font-airbnb_400 text-text16 md:text-text24 w-11/12 mx-auto">
                                            Basándonos en la información proporcionada, tu
                                            estimación de precio inicial es...
                                        </p>
                                        <p class="font-airbnb_700 text-text48 md:text-text52 w-11/12 mx-auto">s/ 150</p>

                                        <div>
                                            <button
                                                class="submit cursor-pointer flex gap-2 basis-4/12 button__base button__base-form bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center">
                                                <span>Adquirir el servicio</span>
                                                <div>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.8333 7.625L17 12M17 12L12.8333 16.375M17 12L7 12"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                        <!-- arros -->
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="field btns">
                                <button class="prev-3 prev">Previous</button>
                                <button class="submit">Submit</button>
                            </div> --}}

                            <div>
                                <img src="{{ asset('images/img/imagen_22.png') }}" alt="limpia bnb"
                                    class="absolute bottom-[40%] left-0 w-8">
                            </div>




                        </div>
                    </form>
                </div>
                <div class="absolute top-0 hidden corona-top">
                    <img src="./images/img/imagen_28.png" alt="">
                </div>

            </div>
        </div>
    </main>



@section('scripts_improtados')
    <script>
        function alerta(message) {
                Swal.fire({
                    title: message,
                    icon: "error",
                });
        }
        /* progresbar */
        const slidePage = document.querySelector(".slide-page");
        const nextBtnFirst = document.querySelector(".firstNext");
        const prevBtnSec = document.querySelector(".prev-1");
        const nextBtnSec = document.querySelector(".next-1");
        const prevBtnThird = document.querySelector(".prev-2");
        const nextBtnThird = document.querySelector(".next-2");
        /* const prevBtnFourth = document.querySelector(".prev-3"); */
        /* const submitBtn = document.querySelector(".submit"); */
        const bullet = document.querySelectorAll(".step .bullet");
        const progress = document.querySelector(".progress-bar");
        const corona = document.querySelector(".corona-top")

        let current = 2; // Estado inicial

        nextBtnFirst.addEventListener("click", function(event) {
            event.preventDefault();

            const habitaciones = document.querySelector('input[name="habitaciones"]').value;
                const camas = document.querySelector('input[name="camas"]').value;
                const banios = document.querySelector('input[name="banios"]').value;
                const arrayValuePageOne = [habitaciones, camas, banios];

                if(arrayValuePageOne.includes("")){
                    alerta("Por favor, asegurese de completar todos los campos");
                    return;
                }

                if (arrayValuePageOne.some(valor => valor <= 0)) {
                    alerta("Por favor, asegurese de solo ingresar valores mayores a cero");
                    return;
                }

            slidePage.style.marginLeft = "-25%";
            bullet[current - 1].classList.add("active");
            current += 1;
        });
        nextBtnSec.addEventListener("click", function(event) {
            event.preventDefault();

            const metros = document.querySelector('input[name="metros"]').value;
                const arrayValuePageTwo = [metros];

                if(arrayValuePageTwo.includes("")){
                    alerta("Por favor, asegurese de completar todos los campos");
                    return;
                }
                if (arrayValuePageTwo.some(valor => valor <= 0)) {
                    alerta("Por favor, asegurese de solo ingresar valores mayores a cero");
                    return;
                }



            slidePage.style.marginLeft = "-50%";
            bullet[current - 1].classList.add("active");
            current += 1;
        });
        nextBtnThird.addEventListener("click", function(event) {
            event.preventDefault();

            const direction = document.querySelector('input[name="direction"]').value;
                const arrayValuePageThree = [direction];

                if(arrayValuePageThree.includes("")){
                    alerta("Por favor, asegurese de completar todos los campos");
                    return;
                }


            slidePage.style.marginLeft = "-75%";
            bullet[current - 1].classList.add("active");
            // current -> indica la cantidad de bullets
            if (current === 4) {
                progress.classList.add("opacity-0");
                corona.classList.remove('hidden');
            }
        });

        $('#formCotizacionMobile').submit(function(event) {
                event.preventDefault();
                let formDataArray = $(this).serializeArray();
                console.log(formDataArray);

                $.ajax({
                    url: '{{ route('guardarContactos') }}',
                    method: 'POST',
                    data: formDataArray,
                    success: function(response) {
                        Swal.fire({
                            title: response.message,
                            icon: "success",
                        });

                        $('#formCotizacionMobile')[0].reset();

                        /* current = 2;
                    progress.classList.remove("opacity-0");
                    progress.classList.add("opacity-1");

                    bullet.forEach((step, index) => {
                        if (index !== 0) {
                            step.classList.remove("active");
                        }
                    });
                    slidePage.style.marginLeft = "0%";
                    corona.classList.add('hidden'); */
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
            })
        /* submitBtn.addEventListener("click", function(event) {
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
        }); */

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

    </script>

@stop

@stop
