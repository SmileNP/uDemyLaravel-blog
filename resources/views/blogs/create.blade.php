@extends('layouts.app')

@section('content')
    <h1>CREATE BLOG</h1>
    <form method="post" action="/blogs">
        <input type="text" name="title" placeholder="Enter title">

        <input type="submit" name="submit">
        {{csrf_field()}}
    </form>

@endsection
