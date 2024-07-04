<footer class="bg-bgAzul text-textWhite pt-16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <div class="grid grid-cols-1 lg:grid-cols-3 w-11/12 mx-auto border-b-[1.5px] border-white pb-12 gap-12"
    data-aos="fade-up" data-aos-offset="150">
    <div class="flex flex-col col-span-1 gap-10">
      <p class="font-bold text-text28 2md:text-text36">LimpiaBnB</p>

      <p class="font-airbnb_400 text-text16 2md:text-text20 w-full md:w-1/2">
        Resolvemos la limpieza integral de tus espacios
        para asegurar la mejor experiencia para tus
        huéspedes.
      </p>

      <div class="flex gap-5">
        @if (strlen($generales->instagram) > 0)
          <a href="https://{{ $generales->instagram }}" target="_blank">
            <div class="flex bg-white rounded-full items-center justify-center p-0 w-[50px] h-[50px]">
              <i class="fa-brands fa-instagram fa-2x " style="color:#0071be"> </i>

            </div>
          </a>
        @endif
        @if (strlen($generales->facebook) > 0)
          <a href="https://{{ $generales->facebook }}" target="_blank">
            <div class="flex bg-white rounded-full items-center justify-center p-0 w-[50px] h-[50px]">
              <i class="fa-brands fa-facebook-f fa-2x " style="color:#0071be"> </i>



            </div>
          </a>
        @endif
        @if (strlen($generales->linkedin) > 0)
          <a href="https://{{ $generales->linkedin }}" target="_blank">
            <div class="flex bg-white rounded-full items-center justify-center p-0 w-[50px] h-[50px]">
              <i class="fa-brands fa-linkedin-in fa-2x " style="color:#0071be"> </i>

            </div>
          </a>
        @endif
        @if (strlen($generales->twitter) > 0)
          <a href="https://{{ $generales->twitter }}" target="_blank">
            <div class="flex bg-white rounded-full items-center justify-center p-0 w-[50px] h-[50px]">
              <i class="fa-brands fa-x-twitter fa-2x " style="color:#0071be"> </i>

            </div>
          </a>
        @endif
        @if (strlen($generales->youtube) > 0)
          <a href="https://{{ $generales->youtube }}" target="_blank">
            <div class="flex bg-white rounded-full items-center justify-center p-0 w-[50px] h-[50px]">
              <i class="fa-brands fa-youtube fa-2x " style="color:#0071be"> </i>

            </div>
          </a>
        @endif







        {{-- corregir por linkedin --}}

      </div>
    </div>

    <div class="flex flex-col col-span-2 md:flex-row gap-10">
      <div class="flex-grow md:basis-1/4 gap-10">
        <p class="font-airbnb_500  mb-3 text-text16 2md:text-text20">
          Enlaces Rápidos
        </p>
        <div class="flex flex-col gap-5 font-airbnb_400">
          <a href="{{ route('index') }}" class="font-airbnb_400 text-text14 2md:text-text18">Inicio</a>

          <a href="{{ route('index') . '#servicios' }}"
            class="font-airbnb_400 text-text14 2md:text-text18">Servicios</a>

          <a href="{{ route('index') . '#pasos' }}" class="font-airbnb_400 text-text14 2md:text-text18">Paso a Paso</a>

          <a href="{{ route('index') . '#nosotros' }}" class="font-airbnb_400 text-text14 2md:text-text18">Acerca de
            Nosotros</a>

          @if ($blog > 0)
            <a href="{{ route('blog', 0) }}" class="font-airbnb_400 text-text14 2md:text-text18">Blog </a>
          @endif

          <a href="{{ route('index') . '#contacto' }}" class="font-airbnb_400 text-text14 2md:text-text18">Contacto</a>
        </div>
      </div>

      <div class="flex-grow md:basis-1/4 gap-10">
        <p class="font-airbnb_500 mb-3 text-text16 2md:text-text20 ">
          Datos de contacto
        </p>
        <div class="flex flex-col gap-5 font-airbnb_400">
          <div>

            <p class="font-airbnb_400 text-text14 2md:text-text18 opacity-80">
              Direccion:
            </p>
            <p class="font-airbnb_400 text-text14 2md:text-text18">
              {{ $generales->address }} {{ $generales->inside }} - {{ $generales->district }}
            </p>

          </div>

          <div>
            <p class="font-airbnb_400 text-text14 2md:text-text18 opacity-80">
              Correo Electrónico:
            </p>
            <p class="font-airbnb_400 text-text14 2md:text-text18">
              {{-- info@limpiabnb.com.pe --}} {{ $generales->email }}</p>
          </div>

          <div>
            <p class="font-airbnb_400 text-text14 2md:text-text18 opacity-80">Teléfono:

            </p>
            <p class="font-airbnb_400 text-text14 2md:text-text18">
              <span>{{-- +51 999 888 444 --}}{{ $generales->office_phone }} </span>
            </p>

          </div>
        </div>
      </div>

      <div class="flex-grow md:basis-1/4 gap-10">
        <p class="font-airbnb_500 mb-3 text-text16 2md:text-text20">Aviso Legal</p>
        <div class="flex flex-col gap-5 font-airbnb_400">
          <a href="/politica_privacidad" class="font-airbnb_400 text-text14 2md:text-text18">Política de Privacidad</a>
          <a href="/term_condiciones" class="font-airbnb_400 text-text14 2md:text-text18">Términos y Condiciones</a>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center py-16 font-airbnb_400 w-11/12 mx-auto text-text14">
    <p>&copy; 2024 LimpiaBnB. Todos los derechos reservados</p>
  </div>
</footer>
