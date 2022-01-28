 @extends('layout.front')
 @section('content')
 <!-- Start Banner Hero -->

 @foreach($about as $ab)
    <section class="bg-light w-100">
            <div class="container">
                <div class="row d-flex align-items-center py-5">
                    <div class="col-lg-6 text-start">
                        <h1 class="h2 py-5 text-primary typo-space-line"> {{ $ab->judul }} </h1>
                        <p class="light-300">
                            {!! $ab->deskripsi  !!}
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/' . $ab->gambar) }}">
                    </div>
                </div>
            </div>
    </section>
    @endforeach
    <!-- End Banner Hero -->

    <!-- Start Choice -->
    @foreach($why as $w)
    <section class="why-us banner-bg bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="banner-img col-lg-5">
                    <img src="{{ asset('assets/images/' . $w->gambar) }}" class="rounded img-fluid" alt="">
                </div>
                <div class="banner-content col-lg-7 align-self-end">
                    <h2 class="h2 pb-3">{{ $ab->judul }}</h2>
                    <p class="text-muted pb-5 light-300">
                    {!! $ab->deskripsi  !!}</p>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- End Choice -->

   

    @endsection