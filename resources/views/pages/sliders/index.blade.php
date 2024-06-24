<x-app-layout title="Bienvenidos seccion">
  @php

    $route = resource_path('views/pages/sliders/databienvenido.json');
    $file = file_get_contents($route);
    $archivoArray = json_decode($file, true);

    // Convertir el array en un objeto
    $archivoObjeto = (object) $archivoArray;

  @endphp
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">



    <div
      class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700 mb-4">
      <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 mb-4 p-3">

        <div class="lg:col-span-1">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

            <h2 class="md:col-span-6 text-lg font-semibold text-slate-800 dark:text-white">Información la Seccion
              bienvenido </h2>



            <div class="md:col-span-3">
              <label for="inside">Pre-Titulo</label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="preTitulo" name="preTitulo"
                  value="{{ $archivoObjeto->bienvenida['preTitulo'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Pre-Titulo">
              </div>
            </div>

            <div class="md:col-span-3">
              <label for="district">Titulo</label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="titulo" name="titulo" value="{{ $archivoObjeto->bienvenida['titulo'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Titulo">
              </div>
            </div>

            <div class="md:col-span-2">
              <label for="country">Enlace boton</label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="enlacebtn" name="enlacebtn"
                  value="{{ $archivoObjeto->bienvenida['enlacebtn'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Enlace boton">
              </div>
            </div>

            <div class="md:col-span-3">
              <label for="email">Texto Btn </label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="email" id="textoBtn" name="textoBtn"
                  value="{{ $archivoObjeto->bienvenida['textoBtn'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Texto Btn">
              </div>
            </div>
            <div class="md:col-span-6">
              <label for="email">Extracto </label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="email" id="extracto" name="extracto"
                  value="{{ $archivoObjeto->bienvenida['extracto'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Extracto">
              </div>
            </div>


            <div class="md:col-span-5 text-right mt-6">
              <div class="inline-flex items-end">
                <button type="submit" id="guardarBienvenidaJson"
                  class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                  Actualizar Seccion bienvenidos
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <section class="py-4 border-b border-slate-100 dark:border-slate-700">
      <a href="{{ route('slider.create') }}"
        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded text-sm">Agregar slider</a>
    </section>
    <div
      class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">


      <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Sliders</h2>
      </header>
      <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">

          <table id="tabladatos" class="display text-lg" style="width:100%">
            <thead>
              <tr>
                <th>Titulo</th>
                <th>Imagen </th>

                <th>Visible</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($slider as $item)
                <tr>
                  <td>{{ $item->title }}</td>
                  <td class="px-3 py-2"><img class="w-16" src="{{ asset($item->url_image . $item->name_image) }}"
                      alt=""></td>

                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="hs-basic-usage"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                                            rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                                            checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                                            dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                                            before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                                            before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='visible' data-idSlider='{{ $item->id }}'
                        data-titleSlider='{{ $item->title }}' {{ $item->visible == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>



                  </td>
                  <td class="flex flex-row justify-end items-center gap-5">

                    <a href="{{ route('slider.edit', $item->id) }}"
                      class="bg-yellow-400 px-3 py-2 rounded text-white  "><i
                        class="fa-regular fa-pen-to-square"></i></a>
                    {{-- {{  route('servicios.destroy', $item->id) }} --}}
                    <form action=" " method="POST">
                      @csrf
                      <a data-idService='{{ $item->id }}'
                        class="btn_delete bg-red-600 px-3 py-2 rounded text-white cursor-pointer"><i
                          class="fa-regular fa-trash-can"></i></a>
                      <!-- <a href="" class="bg-red-600 p-2 rounded text-white"><i class="fa-regular fa-trash-can"></i></a> -->
                    </form>

                  </td>
                </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Titulo</th>
                <th>Imagen </th>

                <th>Visible</th>
                <th>Acciones</th>
              </tr>
            </tfoot>
          </table>

        </div>
      </div>
    </div>



  </div>

  <script>
    $('document').ready(function() {

      new DataTable('#tabladatos', {
        responsive: true
      });

      $(".btn_delete").on("click", function(e) {

        var id = $(this).attr('data-idService');

        Swal.fire({
          title: "Seguro que deseas eliminar?",
          text: "Vas a eliminar un slider",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Si, borrar!",
          cancelButtonText: "Cancelar"
        }).then((result) => {
          if (result.isConfirmed) {

            $.ajax({

              url: '{{ route('slider.deleteSlider') }}',
              method: 'POST',
              data: {
                _token: $('input[name="_token"]').val(),
                id: id,

              }

            }).done(function(res) {

              Swal.fire({
                title: res.message,
                icon: "success"
              });

              location.reload();

            })


          }
        });

      });


      $(".btn_swithc").on("change", function() {

        var status = 0;
        var id = $(this).attr('data-idSlider');
        let contenedor = $(this);
        var titleSlider = $(this).attr('data-titleSlider');
        var field = $(this).attr('data-field');

        if ($(this).is(':checked')) {
          status = 1;
        } else {
          status = 0;
        }



        $.ajax({
          url: "{{ route('slider.updateVisible') }}",
          method: 'POST',
          data: {
            _token: $('input[name="_token"]').val(),
            status: status,
            id: id,
            field: field,
          },
          success: function(response) {
            Swal.fire({
              position: "top-end",
              icon: "success",
              title: titleSlider + " a sido modificado",
              showConfirmButton: false,
              timer: 1500

            });

            if (response.cantidad >= 1) {


              Swal.fire({
                position: "top-center",
                icon: "success",
                title: "Ya no puedes hacer visible",
                showConfirmButton: false,
                timer: 2000

              });

              // Deshabilitar todos los checkboxes con la clase .check_d
              $('.check_d:not(:checked)').prop('disabled', true);

            } else {

              // Habilitar todos los checkboxes con la clase .check_d
              $('.check_d').prop('disabled', false);
            }

          },
          error: function(response) {

            Swal.close();
            Swal.fire({
              title: response.responseJSON.message,
              icon: "error",
            });

            contenedor[0].checked = !contenedor[0].checked;

          }
        })



      });
    })
  </script>
  <script>
    $('#guardarBienvenidaJson').on('click', function(e) {
      console.log('actualizando dato sdel json')
      e.preventDefault()
      // slider.updateJson

      let preTitulo = $("#preTitulo").val()
      let titulo = $("#titulo").val()
      let enlacebtn = $("#enlacebtn").val()
      let textoBtn = $("#textoBtn").val()
      let extracto = $("#extracto").val()

      $.ajax({
        url: "{{ route('slider.updateJson') }}",
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          preTitulo,
          titulo,
          enlacebtn,
          textoBtn,
          extracto

        },
        success: function(response) {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: titleSlider + " a sido modificado",
            showConfirmButton: false,
            timer: 1500

          });


        },
        error: function(response) {

          Swal.close();
          Swal.fire({
            title: response.responseJSON.message,
            icon: "error",
          });



        }
      })
    })
  </script>

</x-app-layout>
