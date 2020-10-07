@extends('frontend.layouts.main')

@section('title','Coco Smile - Home')

@section('content')
   @include('frontend.partials.welcome')
   @include('frontend.partials.products')
   @include('frontend.partials.articles')
@endsection