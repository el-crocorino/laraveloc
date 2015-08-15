@extends('template')
@section('title')
    Envoi d'une image
@stop

@section('content')
    <br>
    <div class="col-sm-offest-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Envoi d'une image</div>
            <div class="panel-body">
                @if(session->has('errors'))
                    <div class="alert alert-danger">{!! session('errors') !!}</div>
                @endif
                {!! Form::open(['url' => 'image-upload/form', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                        {!! $errors-first('image', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
