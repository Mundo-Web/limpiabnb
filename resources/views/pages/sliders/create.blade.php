<x-app-layout title="Crear Slider">

  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div
        class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
        <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
          <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Agregar nuevo slider</h2>
        </header>



        <div class="p-3">
          <div class="rounded shadow-lg p-4 px-4 ">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">


              <div class="md:col-span-5">
                <label for="imagen">Subir imagen</label>
                <div class="relative mb-2  mt-2">
                  <input name="imagen"
                    class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
              </div>
              <span class="text-red-400">
                @error('imagen')
                  {{ $message }}
                @enderror
              </span>





              <div class="md:col-span-5 text-right mt-6 flex justify-between">
                <div class="inline-flex items-end">
                  <a href="{{ URL::previous() }}"
                    class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
                </div>
                <div class="inline-flex items-end">
                  <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Guardar
                    slider</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

  </div>



</x-app-layout>
