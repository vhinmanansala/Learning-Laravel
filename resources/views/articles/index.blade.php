@extends('system')

@section('content')
    <h1>Articles</h1>
    
    @foreach ($articles as $article)
        <article>
            <h2> 
                <a href="{{action('ArticlesController@show', [$article->id])}}"> {{ $article->title }}</a>
            </h2>
            
            <span>{{$article->published_at}}</span>
            
            <div class="body">
                {{ $article->body }}
            </div>
        </article>
    @endforeach
@stop
        
       
