@extends('components.public.matrix')

@section('css_improtados')

    <style>
        .text__blog-header {
            color: #0071BE;
        }

        .menu__blog-azul {
            stroke: #0071BE
        }
    </style>

@stop




@section('content')
    <main>
        <section class="text-textAzul w-11/12 mx-auto flex flex-col gap-10 pt-44 pb-24" data-aos="fade-up"
            data-aos-offset="150">
            <div class="flex flex-col gap-5">
                <h1 class="text-text48 2md:text-text52 font-airbnb_700 leading-none md:leading-tight">
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                </h1>
                <p class="font-airbnb_500 text-text18 2md:text-text22 text-textCeleste">
                    12 de Abril, 2024
                </p>
                <p class="after__underline"></p>
            </div>

            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-3 font-airbnb_400 text-text16 2md:text-text22">
                    <p>
                        Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis
                        vulputate orci, ac hendrerit purus. Nunc sagittis lacus sem. Nam
                        varius purus et urna vehicula, eget dictum magna efficitur.
                        Vestibulum facilisis sapien id dolor suscipit malesuada. Cras
                        tristique odio ipsum.
                    </p>

                    <p>
                        Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis
                        vulputate orci, ac hendrerit purus. Nunc sagittis lacus sem. Nam
                        varius purus et urna vehicula, eget dictum magna efficitur.
                        Vestibulum facilisis sapien.
                    </p>

                    <p>
                        Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis
                        vulputate orci, ac hendrerit purus. Nunc sagittis lacus sem. Nam
                        varius purus et urna vehicula.
                    </p>
                </div>

                <div class="flex flex-col gap-5">
                    <h2 class="font-airbnb_700 text-text22 2md:text-text26">
                        Vestibulum vehicula urna arcu
                    </h2>
                    <div class="flex flex-col gap-5">
                        <p class="font-airbnb_400 text-text16 2md:text-text22">
                            Vestibulum facilisis sapien id dolor suscipit malesuada. Cras
                            tristique odio ipsum. Morbi at accumsan lacus. Phasellus
                            efficitur magna eget orci posuere, at pretium metus ultricies.
                            Proin sollicitudin at est non imperdiet. Morbi rhoncus tortor et
                            sapien hendrerit, vel luctus ex feugiat.
                        </p>

                        <div class="font-airbnb_400 text-text16 2md:text-text22 mx-6">
                            <ul class="list-disc">
                                <li>
                                    Ut leo dui, sollicitudin eu leo quis, commodo eleifend
                                    lectus.
                                </li>
                                <li>Donec tincidunt turpis lacinia nulla ultricies.</li>
                                <li>Nam a lorem ut dui ultrices efficitur vitae.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="flex flex-col gap-5">
                    <h2 class="font-airbnb_700 text-text22 2md:text-text26">
                        Nunc tincidunt sollicitudin lectus a ornare
                    </h2>
                    <div class="flex flex-col gap-3 font-airbnb_400 text-text16 2md:text-text22">
                        <p>
                            Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris
                            quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                            sem. Nam varius purus et urna vehicula, eget dictum magna
                            efficitur. Vestibulum facilisis sapien id dolor suscipit
                            malesuada. Cras tristique odio ipsum.
                        </p>

                        <p>
                            Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris
                            quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                            sem. Nam varius purus et urna vehicula, eget dictum magna
                            efficitur. Vestibulum facilisis sapien.
                        </p>

                        <p>
                            Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris
                            quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                            sem. Nam varius purus et urna vehicula.
                        </p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-wrap gap-4 justify-center font-airbnb_500 text-text20 2md:text-text24">
                    <p
                        class="bg-[#FCFCFC] flex-grow text-text16 xl:text-text22 text-justify border-l-8 border-[#0071BE] rounded-md px-3 py-2 w-full md:w-5/12 lg:w-3/12">
                        Phasellus efficitur magna eget orci posuere, at pretium metus
                        ultricies. Proin sollicitudin at est non imperdiet. Morbi rhoncus
                        tortor et sapien hendrerit, vel luctus ex feugiat.
                    </p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-offset="150">

                <img src="{{ asset('images/img/imagen_25.png') }}" alt="limpieza" class="w-full h-full hidden md:block">

                <img src="{{ asset('images/img/imagen_26.png') }}" alt="limpieza" class="w-full h-full block md:hidden">

            </div>

            <div data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col gap-5">
                    <h2 class="font-airbnb_700 text-text22 2md:text-text26">
                        Mauris leo nibh, consequat pulvinar auctor
                    </h2>
                    <div class="flex flex-col gap-3 font-airbnb_400 text-text16 2md:text-text22">
                        <p>
                            Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris
                            quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                            sem. Nam varius purus et urna vehicula, eget dictum magna
                            efficitur. Vestibulum facilisis sapien id dolor suscipit
                            malesuada. Cras tristique odio ipsum.
                        </p>

                        <p>
                            Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris
                            quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                            sem. Nam varius purus et urna vehicula, eget dictum magna
                            efficitur. Vestibulum facilisis sapien.
                        </p>

                        <p>
                            Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris
                            quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                            sem. Nam varius purus et urna vehicula.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <a class="flex items-center gap-2" href="#">
                    <div>
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.8892 10.167L9.33366 16.0003M9.33366 16.0003L14.8892 21.8337M9.33366 16.0003L22.667 16.0003"
                                stroke="#3F76BB" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="font-airbnb_700 text-text16 2md:text-text22 text-textCeleste">
                        Previous
                    </p>
                </a>

                <a class="flex items-center gap-2" href="#">
                    <p class="font-airbnb_700 text-text16 2md:text-text22 text-textCeleste">
                        Next
                    </p>
                    <div>
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.1108 10.167L22.6663 16.0003M22.6663 16.0003L17.1108 21.8337M22.6663 16.0003L9.33301 16.0003"
                                stroke="#3F76BB" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </a>
            </div>
        </section>
    </main>






@section('scripts_improtados')


@stop

@stop
