@extends('main')
@section('title')
    Les utilisateurs
@stop
@section('content')
    {!! Form::open(['url' => 'users/infos']) !!}
        {!! Form::label('name', 'Entrez votre nom : ') !!}
        {!! Form::text('name') !!}
        {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@stop
