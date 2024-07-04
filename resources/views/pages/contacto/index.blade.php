<x-app-layout title="Bienvenidos seccion">
  @php

    $route = resource_path('views/pages/contacto/contacto.json');
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

            <h2 class="md:col-span-6 text-lg font-semibold text-slate-800 dark:text-white">Información la Seccion 'Paso a
              Paso' </h2>



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
                  value="{{ $archivoObjeto->Contacto['preTitulo'] }}"
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
                <input type="text" id="titulo" name="titulo" value="{{ $archivoObjeto->Contacto['titulo'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Titulo">
              </div>
            </div>
            <div class="md:col-span-6">
              <label for="email">Extracto Izquierdo </label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="email" id="extractoIzq" name="extractoIzq"
                  value="{{ $archivoObjeto->Contacto['extractoIzq'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Extracto">
              </div>
            </div>
            <div class="md:col-span-5">
              <label for="inside">Titulo Form</label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="tituloForm" name="tituloForm"
                  value="{{ $archivoObjeto->Contacto['tituloForm'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Pre-Titulo">
              </div>
            </div>
            <div class="md:col-span-5">
              <label for="inside">Titulo Derecho</label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="tituloDerech" name="tituloDerech"
                  value="{{ $archivoObjeto->Contacto['tituloDerech'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Pre-Titulo">
              </div>
            </div>




            <div class="md:col-span-6">
              <label for="email">Extracto Derecho </label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="ExtractoDerech" name="ExtractoDerech"
                  value="{{ $archivoObjeto->Contacto['ExtractoDerech'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Extracto Derecho">
              </div>
            </div>




            <div class="md:col-span-5 text-right mt-6">
              <div class="inline-flex items-end">
                <button type="submit" id="guardarPasoaPaso"
                  class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                  Actualizar Seccion Contacto
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>






  </div>


  <script>
    $('#guardarPasoaPaso').on('click', function(e) {
      console.log('actualizando dato sdel json')
      e.preventDefault()
      // slider.updateJson

      let preTitulo = $("#preTitulo").val()
      let titulo = $("#titulo").val()

      let extractoIzq = $("#extractoIzq").val()
      let tituloForm = $("#tituloForm").val()
      let tituloDerech = $("#tituloDerech").val()
      let ExtractoDerech = $("#ExtractoDerech").val()


      let formData = new FormData();
      formData.append('_token', $('input[name="_token"]').val());
      formData.append('preTitulo', preTitulo);
      formData.append('titulo', titulo);

      formData.append('extractoIzq', extractoIzq);
      formData.append('tituloForm', tituloForm);
      formData.append('tituloDerech', tituloDerech);
      formData.append('ExtractoDerech', ExtractoDerech);




      $.ajax({
        url: "{{ route('contacto.updateJson') }}",
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          Swal.fire({

            icon: "success",
            title: 'Paso a Paso Actualizado Correctamente',

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
