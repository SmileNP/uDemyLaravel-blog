@extends('layouts.app')

@section('content')
    <h1>CREATE BLOG</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'\App\Http\Controllers\PostsController@store']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <input type="submit" name="submit">
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
