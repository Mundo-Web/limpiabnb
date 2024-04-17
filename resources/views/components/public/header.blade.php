<!-- hamburguesa -->
<div class="navigation z-[200]">
    <button aria-label="hamburguer" type="button" class="hamburger onMenu" id="position">
        <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 2L2 18M18 18L2 2" stroke="white" stroke-width="2.66667" stroke-linecap="round" />
        </svg>
    </button>
    <nav class="menu-list">
        <ul>
            <li>
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a href="#servicios">Servicios</a>
            </li>
            <li>
                <a href="#pasos">Paso a Paso</a>
            </li>
            <li>
                <a href="#nosotros">Nosotros</a>
            </li>
            <li>
                <a href="blog.html">Blog</a>
            </li>
            <li>
                <a href="#contacto">Contacto</a>
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
                    <img src="./images/img/image_2.png" alt="Limpia BnB" />
                </a>
            </div>
            <nav class="font-medium text-text20 2md:text-text24 hidden md:flex gap-10 items-center text__blog-header">
                <a href="{{route('index')}}">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="#pasos">Paso a paso</a>
                <a href="#nosotros">Nosotros</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="#contacto">Contacto</a>
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
            <a href="#" class="">
                <img src="./images/img/icon.png" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full" />
            </a>
        </div>
    </div>
    <!--  -->
</header>
