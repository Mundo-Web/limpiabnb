<footer class="bg-bgAzul text-textWhite pt-16">
   
    <div class="grid grid-cols-1 lg:grid-cols-2 w-11/12 mx-auto border-b-[1.5px] border-white pb-12 gap-12"
        data-aos="fade-up" data-aos-offset="150">
        <div class="flex flex-col gap-10">
            <p class="font-bold text-text28 2md:text-text36">LimpiaBnB</p>

            <p class="font-airbnb_400 text-text16 2md:text-text20 w-full md:w-1/2">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, to
            </p>

            <div class="flex gap-5">
                <a href="https://{{ $generales->instagram }}" target="_blank">
                    <img src="{{asset('/images/img/instagram.png')}}" alt="instagram" />
                </a>
                <a href="https://{{ $generales->facebook }}" target="_blank">
                    <img src="{{asset('/images/img/facebook.png')}}" alt="facebook" />
                </a>
                {{-- corregir por linkedin --}}
                <a href="https://{{ $generales->linkedin }}" target="_blank">
                    <img src="{{asset('/images/img/linkedin.png')}}" alt="linkedin" />
                </a>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-10">
            <div class="flex flex-col gap-10">
                <p class="font-airbnb_500  text-text16 2md:text-text20">
                    Enlaces Rápidos
                </p>
                <div class="flex flex-col gap-5 font-airbnb_400">
                    <a href="{{route('index')}}" class="font-airbnb_400 text-text14 2md:text-text18">Inicio</a>

                    <a href="{{route('index').'#servicios'}}" class="font-airbnb_400 text-text14 2md:text-text18">Servicios</a>

                    <a href="{{route('index').'#pasos'}}" class="font-airbnb_400 text-text14 2md:text-text18">Paso a Paso</a>

                    <a href="{{route('index').'#nosotros'}}" class="font-airbnb_400 text-text14 2md:text-text18">Acerca de Nosotros</a>

                    <a href="{{route('index').'#contacto'}}" class="font-airbnb_400 text-text14 2md:text-text18">Contacto</a>
                </div>
            </div>

            <div class="flex flex-col gap-10">
                <p class="font-airbnb_500 text-text16 2md:text-text20 ">
                    Datos de contacto
                </p>
                <div class="flex flex-col gap-5 font-airbnb_400">
                    <p class="font-airbnb_400 text-text14 2md:text-text18">
                        {{-- 123 Calle Principal, Ciudad Perfecta --}}
                        {{$generales->address}}, {{$generales->inside}} - {{$generales->district}}
                    </p>

                    <div>
                        <p class="font-airbnb_400 text-text14 2md:text-text18">
                            Correo Electrónico
                        </p>
                        <p class="font-airbnb_400 text-text14 2md:text-text18">
                            {{-- info@limpiabnb.com.pe --}} {{$generales->email}}</p>
                    </div>

                    <div>
                        <p class="font-airbnb_400 text-text14 2md:text-text18">Teléfono: 
                            <span>{{-- +51 999 888 444 --}}{{$generales->office_phone}} </span></p>
                        
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-10">
                <p class="font-airbnb_500 text-text16 2md:text-text20">Aviso Legal</p>
                <div class="flex flex-col gap-5 font-airbnb_400">
                    <p class="font-airbnb_400 text-text14 2md:text-text18">Política de Privacidad</p>
                    <p class="font-airbnb_400 text-text14 2md:text-text18">Términos y Condiciones</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center py-16 font-airbnb_400 w-11/12 mx-auto text-text14">
        <p>&copy; 2024 LimpiaBnB. Todos los derechos reservados</p>
    </div>
</footer>
