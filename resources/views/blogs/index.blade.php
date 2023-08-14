@extends('layouts.app')

@section('content')

    <ul>
        @foreach($blogs as $blog)
            <li>
                <a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection
