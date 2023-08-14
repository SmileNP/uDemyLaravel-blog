@extends('layouts.app')

@section('content')
    <h1>EDIT {{$blog->title}} BLOG</h1>
    {!! Form::model($blog, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PostsController@update', $blog->id]]) !!}
    {{csrf_field()}}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}

    {!! Form::submit('Update Post', ['class'=> "btn btn-info"]) !!}

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=>['\App\Http\Controllers\PostsController@destroy', $blog->id]]) !!}

    {!! Form::submit('Delete Post', ['class'=> "btn btn-danger"]) !!}

    {{csrf_field()}}
    {!! Form::close() !!}

@endsection
