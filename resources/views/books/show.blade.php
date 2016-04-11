@extends('layouts.master')

@section('title')
    Show book {{ $title }}
@stop

@section('head')
    <link rel="stylesheet" href="/css/book/show.css">
@stop

@section('content')
    @if(isset($title))
        <h1>Show book: {{ $title }}</h1>
    @else
        <h1>No book chosen</h1>
    @endif
@stop