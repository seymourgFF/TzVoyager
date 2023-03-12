@extends('layouts.main')
@section('content')
    <div class="container">
    <section>
        <div class="row blog-post-row">
            @foreach($posts as $post)
                <div class="col-md-6 blog-post" data-aos="fade-up">
                    <div class="blog-post-thumbnail-wrapper">
                        <a href="{{route('post.index',$post->id)}}" class="blog-post-permalink"><img style="width: 100%;height: 200px;object-fit: cover;"
                                src="{{'/storage/'.$post->preview}}" alt="blog post"></a>
                    </div>
                    <a href="{{route('post.index',$post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                        <div>{{$post->description}}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    </div>
@endsection
