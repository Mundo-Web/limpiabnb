@extends('components.public.matrix')

@section('css_improtados')

  <style>
    .text__blog-header {
      color: #0071BE;
    }

    .menu__blog-azul {
      stroke: #0071BE
    }

    .border-pagination_gris {
      border-bottom: 4px solid #D1ECF8;
    }

    .border-pagination {
      border-bottom: 4px solid #0071be;
    }
  </style>

@stop

@section('content')
  <main>

    <section class="w-11/12 mx-auto gap-5 grid grid-cols-1 grid-rows-1  pt-60 px-10 lg:px-40 pb-10">
      <div class="flex flex-col items-center gap-5 col-span-1 row-span-1 leading-relaxed" data-aos="fade-up"
        data-aos-offset="150">

        {!! $terms->content ?? '' !!}

      </div>
    </section>

  </main>



@section('scripts_improtados')
  <script>
    /* document.addEventListener("DOMContentLoaded", () => {
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
                                            }); */
  </script>

@stop

@stop
