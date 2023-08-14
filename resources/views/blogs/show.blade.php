@extends('layouts.app')

@section('content')

    <h1><a href="{{route('blogs.edit', $blog->id)}}">{{$blog->title}}</a></h1>

@endsection
