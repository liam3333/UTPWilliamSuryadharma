@extends('templates.master')

@section('title', 'Home Page')

@section('content')
    {{-- Highlight Book Section --}}
    <section>
        <div class="container card mt-5 py-4" style="background-color: black; border-radius: 15px;">
            <div class="row mx-2">
                <div class="col-lg-6">
                    <a href="/detail/{{ $highlight->id }}"><img src="{{ $highlight->post_image }}" alt="Newsletter Photo" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px;"></a>
                </div>
                <div class="col-lg-6 text-light">
                    <h6 class="text-decoration-underline text-uppercase">{{ $highlight->subtitle }}</h6>
                    <h1><a href="/detail/{{ $highlight->id }}" class="text-white" style="text-decoration: none !important">{{ $highlight->title }}</h2></a>
                    <p>{{ $highlight->description }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Latest Book Reviews --}}
    <section>
        <div class="container mt-5">
            <h6 class="text-decoration-underline text-uppercase mb-3">Latest Book Reviews</h6>
            <div class="row">
                @foreach ($latest as $latest)
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <a href="/detail/{{ $latest->id }}"><img src="{{ $latest->post_image }}" alt="Newsletter Photo" class="img-fluid"></a>
                            <div class="card-body" style="height: 220px;">
                                <h5 class="card-title"><a href="/detail/{{ $latest->id }}" class="text-black" style="text-decoration: none !important">{{ $latest->title }}</a></h5>
                                <p class="card-text" style="height: 50px; overflow: hidden;">{{ $latest->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Book Series Review --}}
    <section class="bg-black pt-2 mt-5 pb-4">
        <div class="container mt-5">
            <h6 class="text-decoration-underline text-uppercase mb-3 text-light">Book Series & Review</h6>
            <div class="row">
                @foreach ($review as $review)
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="/detail/{{ $review->id }}"><img src="{{ $review->post_image }}" alt="Newsletter Photo" class="img-fluid"></a>
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-black" style="text-decoration: none !important">{{ $review->title }}</a></h5>
                                <p class="card-text" style="height: 50px; overflow: hidden;">{{ $review->description }}</p>
                                <a href="/detail/{{ $review->id }}" class="btn btn-primary bg-black" style="border: none">Read Post</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection