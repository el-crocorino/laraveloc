@extends('main')
@section('title')
    Enregistrement d'un e-mail
@stop

@section('content')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Enregistrement d'un e-mail</div>
            <div class="panel-body">
                {!! Form::open(['url' => 'email/form']) !!}
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('image', null, ['class' => 'form-control', 'placeholder' => 'Entrez votre e-mail']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
