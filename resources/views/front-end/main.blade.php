@extends('layouts.news-template')

@section('title')
    FLOW {{ __('News') }}
@endsection

@section('item-header')
    @include('front-end.item-header')
@endsection

@section('container-content')
    @include('front-end.container-content')
@endsection

@section('footer')
    @include('front-end.footer')
@endsection

