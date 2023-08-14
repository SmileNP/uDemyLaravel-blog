@extends('layouts.app')

@section('content')

    <ul>
        @foreach($blogs as $blog)
            <div class="image-container">
                <img height="100px" src="{{$blog->path}}" alt="">
            </div>
            <li>
                <a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection
