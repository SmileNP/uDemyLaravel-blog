@extends('layouts.app')

@section('content')
    <h1>EDIT {{$blog->title}} BLOG</h1>
    <form method="post" action="/blogs/{{$blog->id}}">

        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" placeholder="Enter title" value="{{$blog->title}}">

        <input type="submit" name="submit">
        {{csrf_field()}}
    </form>

    <form method="POST" action="/blogs/{{$blog->id}}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="delete">
        {{csrf_field()}}
    </form>

@endsection
