@extends('system')

@section('content')
    <h1>Edit: {!! $article->title !!}</h1>

    <hr>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Name:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Article', null, ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop