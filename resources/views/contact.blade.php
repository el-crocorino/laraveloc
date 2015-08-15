@extends('main');

@section('title')
    Demande de contact
@stop

@section('content')
<br>
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel panel-info">
        <div class="panel-heading">Contactez-moi</div>
        <div class="panel-body">
            {!! Form::open(['url' => 'contact/form']) !!}
                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre E-Mail']) !!}
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('text') ? 'has-error' : '' !!}">
                    {!! Form::textarea('text', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                    {!! $errors->first('text', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop
