@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{'/storage/'.$post->preview}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">

                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content!!}
                    </div>
                </div>
        </div>
    </main>
@endsection
