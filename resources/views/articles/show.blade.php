@extends('system')

@section('content')
    <article>
        <h1>{{$article->title}}</h1>
        
        <article>
            {{$article->body}}
        </article>
    </article>
@stop
        
       
