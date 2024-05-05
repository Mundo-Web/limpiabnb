<!-- hamburguesa -->
<div class="navigation z-[200]">
    <button aria-label="hamburguer" type="button" class="hamburger onMenu" id="position">
        <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 2L2 18M18 18L2 2" stroke="white" stroke-width="2.66667" stroke-linecap="round" />
        </svg>
    </button>
    <nav class="menu-list ">
        <ul>
            <li>
                <a href="{{route('index')}}">Inicio</a>
            </li>
            <li>
                <a href="{{route('index').'#servicios'}}">Servicios</a>
            </li>
            <li>
                <a href="{{route('index').'#pasos'}}">Paso a Paso</a>
            </li>
            <li>
                <a href="{{route('index').'#nosotros'}}">Nosotros</a>
            </li>
            <li>
                <a href="{{route('blog', 0)}}">Blog</a>
            </li>
            <li>
                <a href="{{route('index').'#contacto'}}">Contacto</a>
            </li>
        </ul>
    </nav>
</div>
<!-- md:bg-[url(../images/img/image_1.png)]  -->
<header class="absolute z-50 w-full header__hidden" id="inicio">
    <!--  <div class="absolute inset-0 bg__dark"></div> -->
    <div class="w-11/12 mx-auto text-textWhite flex flex-col gap-32 relative ">
        <div class="flex justify-between items-center pt-10" data-aos="fade-up" data-aos-offset="150">
            <div>
                <a href="{{route('index')}}">
                    <img src="{{asset('/images/img/image_2.png')}}" alt="Limpia BnB" />
                </a>
            </div>
            <nav class="font-airbnb_500 text-text20 2md:text-text24 hidden md:flex gap-10 items-center text__blog-header">
                <a href="{{route('index')}}">Inicio</a>
                <a href="{{route('index').'#servicios'}}">Servicios</a>
                <a href="{{route('index').'#pasos'}}">Paso a paso</a>
                <a href="{{route('index').'#nosotros'}}">Nosotros</a>
                {{-- <a href="{{ route('blog', 1) }}">Blog</a> --}}
                <a href="{{ route('blog', 0) }}">Blog</a>
                <a href="{{route('index').'#contacto'}}">Contacto</a>
            </nav>

            <div class="md:hidden">
                <button aria-label="hamburguer" class="hamburger onMenu">
                    <svg width="50" height="50" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 16H28" stroke="white" stroke-width="2.66667" stroke-linecap="round"
                            stroke-linejoin="round" class="menu__blog-azul"/>
                        <path d="M4 8H28" stroke="white" stroke-width="2.66667" stroke-linecap="round"
                            stroke-linejoin="round" class="menu__blog-azul"/>
                        <path d="M4 24H28" stroke="white" stroke-width="2.66667" stroke-linecap="round"
                            stroke-linejoin="round" class="menu__blog-azul" />
                    </svg>

                </button>
            </div>
        </div>
    </div>

    <!--  -->
    <div class="flex justify-end relative w-11/12">
        <div class="fixed bottom-[25px] z-[100] right-[25px]">
            <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}" target="_blank">
                <img src="{{asset('/images/svg/cotizar.svg')}}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full" />
            </a>
        </div>
    </div>
    <!--  -->
</header>
