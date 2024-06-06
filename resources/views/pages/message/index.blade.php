<x-app-layout title="Mensajes">
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <div
      class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
      <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Mis Mensajes</h2>
      </header>
      <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">

          <table id="tabladatos" class="display text-lg" style="width:100%">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Mensaje</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($mensajes as $item)
                <tr>
                  <td>
                    @if ($item->is_read == '0')
                      <a href="{{ route('mensajes.show', $item->id) }}"><span class="mr-4"><i
                            class="fa-regular fa-envelope"></i></span><span
                          class="font-bold">{{ $item->full_name }}</span></a>
                    @else
                      <a href="{{ route('mensajes.show', $item->id) }}"><span class="mr-4"><i
                            class="fa-regular fa-envelope-open"></i></span><span>{{ $item->full_name }}</span></a>
                    @endif

                  </td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->phone }}</td>
                  <td>{{ $item->message }}</td>
                  <td>
                    <form action="" method="POST">
                      @csrf
                      <a data-idService='{{ $item->id }}'
                        class="btn_delete bg-red-600 px-3 py-2 rounded text-white cursor-pointer"><i
                          class="fa-regular fa-trash-can"></i></a>
                    </form>
                  </td>
                </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Mensaje</th>
                <th>Tool</th>
              </tr>
            </tfoot>
          </table>

        </div>
      </div>
    </div>

  </div>

  <script>
    $('document').ready(function() {
      // new DataTable('#tabladatos');
      $('#tabladatos').DataTable({
        sorting: false, // Desactiva el filtrado

      });

    })

    $(".btn_delete").on("click", function(e) {
      e.preventDefault()

      let id = $(this).attr('data-idService');

      Swal.fire({
        title: "Seguro que deseas eliminar?",
        text: "Vas a eliminar un Logo",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, borrar!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.isConfirmed) {

          $.ajax({

            url: `{{ route('mensajes.borrar') }}`,
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
  </script>

</x-app-layout>
