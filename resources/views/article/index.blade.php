@extends('layouts.app')

@section('title', 'Cтатьи')

@section('header', 'Список статей')

@section('content')
     @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->name }}</a></h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
