@extends('layouts.app')

@section('content')
    <h1>CREATE BLOG</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'\App\Http\Controllers\PostsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::file('file', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Blog', ['class'=>'btn btn-primary']) !!}
    </div>
    {{csrf_field()}}

    {!! Form::close() !!}

    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection
