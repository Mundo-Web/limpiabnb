<x-app-layout title="Bienvenidos seccion">
  @php

    $route = resource_path('views/pages/pasoApaso/dataPasoaPaso.json');
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
                  value="{{ $archivoObjeto->PasoApaso['preTitulo'] }}"
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
                <input type="text" id="titulo" name="titulo" value="{{ $archivoObjeto->PasoApaso['titulo'] }}"
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
                  value="{{ $archivoObjeto->PasoApaso['enlacebtn'] }}"
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
                <input type="email" id="textoBtn" name="textoBtn" value="{{ $archivoObjeto->PasoApaso['textoBtn'] }}"
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
                <input type="email" id="extracto" name="extracto" value="{{ $archivoObjeto->PasoApaso['extracto'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Extracto">
              </div>
            </div>



            <div class="md:col-span-2">
              <label for="country">Bullet 1 </label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="bullet1" name="bullet1" value="{{ $archivoObjeto->PasoApaso['bullet1'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Enlace boton">
              </div>
            </div>

            <div class="md:col-span-3">
              <label for="email">Texto Bullet 1 </label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="email" id="textbullet1" name="textbullet1"
                  value="{{ $archivoObjeto->PasoApaso['textbullet1'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Texto Btn">
              </div>
            </div>
            <div class="md:col-span-2">
              <label for="country">Bullet 2</label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="bullet2" name="bullet2"
                  value="{{ $archivoObjeto->PasoApaso['bullet2'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Enlace boton">
              </div>
            </div>

            <div class="md:col-span-3">
              <label for="email">Texto Bullet 2 </label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="email" id="textbullet2" name="textbullet2"
                  value="{{ $archivoObjeto->PasoApaso['textbullet2'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Texto Btn">
              </div>
            </div>
            <div class="md:col-span-2">
              <label for="country">Bullet 3</label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="text" id="bullet3" name="bullet3"
                  value="{{ $archivoObjeto->PasoApaso['bullet3'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Enlace boton">
              </div>
            </div>

            <div class="md:col-span-3">
              <label for="email">Texto Bullet 3 </label>
              <div class="relative mb-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <input type="email" id="textbullet3" name="textbullet3"
                  value="{{ $archivoObjeto->PasoApaso['textbullet3'] }}"
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Texto Btn">
              </div>
            </div>

            <img class="w-52 md:col-span-5" src="{{ asset($archivoObjeto->PasoApaso['img']) }}" alt="">
            <div class="md:col-span-5">
              <label for="imagen">Subir imagen</label>
              <div class="relative mb-2  mt-2">
                <input name="imagen" id="imagen"
                  class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                  aria-describedby="user_avatar_help" id="user_avatar" type="file">
              </div>
            </div>



            <div class="md:col-span-5 text-right mt-6">
              <div class="inline-flex items-end">
                <button type="submit" id="guardarPasoaPaso"
                  class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                  Actualizar Seccion Paso a Paso
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
      let enlacebtn = $("#enlacebtn").val()
      let textoBtn = $("#textoBtn").val()
      let extracto = $("#extracto").val()
      let bullet1 = $("#bullet1").val()
      let textbullet1 = $("#textbullet1").val()
      let bullet2 = $("#bullet2").val()
      let textbullet2 = $("#textbullet2").val()
      let bullet3 = $("#bullet3").val()
      let textbullet3 = $("#textbullet3").val()

      let formData = new FormData();
      formData.append('_token', $('input[name="_token"]').val());
      formData.append('preTitulo', preTitulo);
      formData.append('titulo', titulo);
      formData.append('enlacebtn', enlacebtn);
      formData.append('textoBtn', textoBtn);
      formData.append('extracto', extracto);
      formData.append('bullet1', bullet1);
      formData.append('textbullet1', textbullet1);
      formData.append('bullet2', bullet2);
      formData.append('textbullet2', textbullet2);
      formData.append('bullet3', bullet3);
      formData.append('textbullet3', textbullet3);

      // Obtener el archivo
      let imagen = $('#imagen')[0].files[0];
      formData.append('imagen', imagen);

      $.ajax({
        url: "{{ route('pasopaso.updateJson') }}",
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
