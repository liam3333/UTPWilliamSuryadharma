@extends('templates.master')

@section('title', 'Detail')

@section('content')
    @php
        $date = Carbon\Carbon::parse($book->post_date)->format('j F, Y');
    @endphp
    <section class="container mt-5">
        <div class="heading">
            <h6 class="text-decoration-underline text-uppercase">{{ $book->subtitle }}</h6>
            <h1 class="mt-3">{{ $book->title }}</h1>
            <p>{{ $book->description }}</p>
            <p>By <span style="font-weight: bold;">{{ $book->author }}</span> | {{ $date }}</p>
            
            @if ($book->ReadingTime->id == 1)
                <span class="btn btn-success">{{ $book->ReadingTime->reading_time }}</span>
            @elseif ($book->ReadingTime->id == 2)
                <span class="btn btn-warning">{{ $book->ReadingTime->reading_time }}</span>
            @elseif ($book->ReadingTime->id == 3)
                <span class="btn btn-danger">{{ $book->ReadingTime->reading_time }}</span>
            @endif
        </div>

        <div class="image-wrapper mt-4">
            <img src="{{ $book->post_image}}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
        </div>

        <div class="social-media-share mt-4">
            <a href="https://id.linkedin.com/" class="linkedin logo"><i class="fab fa-linkedin mt-2"></i></a>
            <a href="https://twitter.com/" class="twitter logo"><i class="fab fa-twitter mt-2"></i></a>
            <a href="https://www.facebook.com/" class="facebook logo"><i class="fab fa-facebook mt-2"></i></a>
            <a href="https://www.instagram.com/" class="instagram logo"><i class="fab fa-instagram mt-2"></i></a>
        </div>

        <p class="mt-4">{{ $book->post_body }}</p>

        <div class="video-section mt-4">
            <p style="font-weight: bold;">Video Section</p>
            <iframe width="100%" height="70%" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        </div>

        <a href="/home" class="btn btn-primary mt-4 mb-4 bg-black" style="border: none;">Back to Homepage</a>
    </section>



@endsection

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        .logo{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .social-media-share a {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 0 5px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            color: #fff;
        }

        .social-media-share a.linkedin {
            background-color: #0077b5;
        }

        .social-media-share a.twitter {
            background-color: #1da1f2;
        }

        .social-media-share a.facebook {
            background-color: #3b5998;
        }

        .social-media-share a.instagram {
            background-color: #c32aa3;
        }

        .social-media-share a i {
            vertical-align: middle;
        }

    </style>
</head>