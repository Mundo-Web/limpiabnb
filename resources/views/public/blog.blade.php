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

        <section class="pt-44 pb-20 text-textAzul">
            <div class="relative " data-aos="fade-up" data-aos-offset="150">
                <div class="w-11/12 mx-auto">
                    <div class="w-full xl:w-3/6 flex flex-col gap-10">
                        <div class="before__underline before__underline-step">
                            <p class="text-[#BFDE8E] text-text18 2md:text-text24 font-airbnb_500">
                                Blog
                            </p>
                        </div>

                        <div class="flex flex-col gap-5">
                            <h2 class="font-airbnb_700 text-text48 2md:text-text64 leading-none md:leading-tight">
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            </h2>

                            <p class="font-airbnb_400 text-text16 2md:text-text20 text-textAzulStrong">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo con
                            </p>
                            <form action="#" class="flex gap-5 items-center flex-col md:flex-row">
                                <div class="w-full md:basis-1/2">
                                    <button type="submit"
                                        class="firstNext next cursor-pointer flex gap-2 py-4 bg-bgButtonBaseAzul hover:bg-blue-500 md:duration-500 justify-center items-center px-2 rounded-lg text-white  text-text16 2md:text-text20 w-full font-airbnb_500">
                                        <span>Suscribirme</span>
                                    </button>
                                </div>

                                <div class="w-full md:basis-1/2">
                                    <input type="text" placeholder="Suscribirme"
                                        class="font-airbnb_500 py-4 px-2 w-full border-[1px] border-[#0071BE] outline-none rounded-lg text-text16 2md:text-text20 placeholder:text-[#E3E3E3]" />
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="hidden xl:block">
                        <img src="{{ asset('images/img/imagen_14.png') }}" alt="limpieza"
                            class="absolute top-[100px] right-0 h-72 md:h-[100%]">

                    </div>
                </div>
            </div>

            <img src="{{ asset('images/img/imagen_13.png') }}" alt="limpieza"
                class="absolute top-0 right-0 w-[1000px] hidden xl:block z-[10]">

        </section>



        <section class="pb-12 flex flex-col gap-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-11/12 mx-auto text-textAzul">
                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <div>
                        <img src="{{ asset('images/img/imagen_15.png') }}" alt="limpieza" class="w-full">
                    </div>
                    <h2 class="font-airbnb_700 text-text24 md:text-text32">
                        Neque porro quisquam est, qui dolorem
                    </h2>
                    <p class="font-airbnb_400 text-text14 md:text-text20 text-textAzulStrong">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo connostrud exercitation ullamco
                        laboris nisi
                    </p>

                    <a href="{{ route('post') }}"
                        class="gap-2 font-airbnb_500 text-text16 md:text-text24 text-textCeleste flex items-center">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.37056 6.30093L17.7008 6.30078M17.7008 6.30078V16.4841M17.7008 6.30078L6.30078 17.7008"
                                    stroke="#0071BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <span>Leer artículo</span>
                    </a>
                </div>

                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <div>
                        <img src="{{ asset('images/img/imagen_16.png') }}" alt="limpieza" class="w-full">

                    </div>
                    <h2 class="font-airbnb_700 text-text24 md:text-text32">
                        Neque porro quisquam est, qui dolorem
                    </h2>
                    <p class="font-airbnb_400 text-text14 md:text-text20 text-textAzulStrong">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo connostrud exercitation ullamco
                        laboris nisi
                    </p>

                    <a href="{{ route('post') }}"
                        class="gap-2 font-airbnb_500 text-text16 md:text-text24 text-textCeleste flex items-center">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.37056 6.30093L17.7008 6.30078M17.7008 6.30078V16.4841M17.7008 6.30078L6.30078 17.7008"
                                    stroke="#0071BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <span>Leer artículo</span>
                    </a>
                </div>

                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <div>
                        <img src="{{ asset('images/img/imagen_17.png') }}" alt="limpieza" class="w-full">

                    </div>
                    <h2 class="font-airbnb_700 text-text24 md:text-text32">
                        Neque porro quisquam est, qui dolorem
                    </h2>
                    <p class="font-airbnb_400 text-text14 md:text-text20 text-textAzulStrong">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo connostrud exercitation ullamco
                        laboris nisi
                    </p>

                    <a href="{{ route('post') }}"
                        class="gap-2 font-airbnb_500 text-text16 md:text-text24 text-textCeleste flex items-center">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.37056 6.30093L17.7008 6.30078M17.7008 6.30078V16.4841M17.7008 6.30078L6.30078 17.7008"
                                    stroke="#0071BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <span>Leer artículo</span>
                    </a>
                </div>

                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <div>
                        <img src="{{ asset('images/img/imagen_18.png') }}" alt="limpieza" class="w-full">


                    </div>
                    <h2 class="font-airbnb_700 text-text24 md:text-text32">
                        Neque porro quisquam est, qui dolorem
                    </h2>
                    <p class="font-airbnb_400 text-text14 md:text-text20 text-textAzulStrong">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo connostrud exercitation ullamco
                        laboris nisi
                    </p>

                    <a href="{{ route('post') }}"
                        class="gap-2 font-airbnb_500 text-text16 md:text-text24 text-textCeleste flex items-center">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.37056 6.30093L17.7008 6.30078M17.7008 6.30078V16.4841M17.7008 6.30078L6.30078 17.7008"
                                    stroke="#0071BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <span>Leer artículo</span>
                    </a>
                </div>

                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <div>
                        <img src="{{ asset('images/img/imagen_19.png') }}" alt="limpieza" class="w-full">

                    </div>
                    <h2 class="font-airbnb_700 text-text24 md:text-text32">
                        Neque porro quisquam est, qui dolorem
                    </h2>
                    <p class="font-airbnb_400 text-text14 md:text-text20 text-textAzulStrong">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo connostrud exercitation ullamco
                        laboris nisi
                    </p>

                    <a href="{{ route('post') }}"
                        class="gap-2 font-airbnb_500 text-text16 md:text-text24 text-textCeleste flex items-center">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.37056 6.30093L17.7008 6.30078M17.7008 6.30078V16.4841M17.7008 6.30078L6.30078 17.7008"
                                    stroke="#0071BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <span>Leer artículo</span>
                    </a>
                </div>

                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <div>
                        <img src="{{ asset('images/img/imagen_20.png') }}" alt="limpieza" class="w-full">

                    </div>
                    <h2 class="font-airbnb_700 text-text24 md:text-text32">
                        Neque porro quisquam est, qui dolorem
                    </h2>
                    <p class="font-airbnb_400 text-text14 md:text-text20 text-textAzulStrong">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo connostrud exercitation ullamco
                        laboris nisi
                    </p>

                    <a href="{{ route('post') }}"
                        class="gap-2 font-airbnb_500 text-text16 md:text-text24 text-textCeleste flex items-center">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.37056 6.30093L17.7008 6.30078M17.7008 6.30078V16.4841M17.7008 6.30078L6.30078 17.7008"
                                    stroke="#0071BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <span>Leer artículo</span>
                    </a>
                </div>
            </div>

            <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                <div class="list-style-none flex font-airbnb_500">
                    <div>
                        <a class="relative block bg-transparent px-4 text-text20 transition duration-300 text-[#0071BE] border-pagination border-b-2 pagination__blog"
                            href="#">
                            01
                        </a>
                    </div>
                    <div aria-current="page">
                        <a class="relative block bg-transparent px-4 text-text20 transition duration-300 text-[#0071BE] border-b-2 pagination__blog"
                            href="#">
                            02
                        </a>
                    </div>
                    <div>
                        <a class="relative block bg-transparent px-4 text-text20 transition duration-300 text-[#0071BE] border-b-2 pagination__blog"
                            href="#">
                            03
                        </a>
                    </div>

                    <div>
                        <a class="relative block bg-transparent px-4 text-text20 transition duration-300 text-[#0071BE] border-b-2 pagination__blog"
                            href="#">
                            04
                        </a>
                    </div>

                    <div>
                        <a class="relative block bg-transparent px-4 text-text20 transition duration-300 text-[#0071BE] border-b-2 pagination__blog"
                            href="#">
                            05
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>



@section('scripts_improtados')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const paginations = document.querySelectorAll(".pagination__blog");
            paginations.forEach((item, index) => {
                item.addEventListener("click", (e) => {
                    item.classList.add("border-pagination");
                    paginations.forEach((pag) => {
                        if (e.target !== pag) {
                            pag.classList.remove("border-pagination");
                        }
                    });
                });
            });
        });
    </script>

@stop

@stop
