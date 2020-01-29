@extends('layouts.app')

@section('title', "Cтатья -  {{ $article->name }}")

@section('header', $article->name)

@section('content')
    <p>{{ $article->body }}</p>
@endsection
