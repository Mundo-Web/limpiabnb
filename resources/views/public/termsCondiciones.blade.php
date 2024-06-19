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

    <section class="pt-44 pb-20 text-textAzul">
      {{--  <div class="relative " data-aos="fade-up" data-aos-offset="150">
        {!! $terms->content ?? '' !!}

      </div> --}}



    </section>


    <section class="pb-12 flex flex-col gap-10">
      <div class="hidden md:flex justify-center items-center w-11/12 mx-auto" data-aos="fade-up" data-aos-offset="150">
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
