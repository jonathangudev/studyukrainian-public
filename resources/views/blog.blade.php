@extends('layouts.layout')

@section('css')
  <link href="/css/sticky-footer-navbar.css" rel="stylesheet"> <!-- from: http://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/# -->
  <link href="/css/extra-styles.css" rel="stylesheet">

@endsection


@section('content')

<main role="main" class="container">
  <div class="container">

  <h1>Blog</h1>

    <ul>
      <li><a href="{{route('blog-how-i')}}">How I Learned Ukrainian</a></li>
      <li><a href="{{route('blog-where-to')}}">Where to Learn Ukrainian in Lviv</a></li>
      <li><a href="{{route('blog-how-to')}}">How to Learn Ukrainian Online</a></li>

      @foreach($files as $file) 

        @php $slug = \Illuminate\Support\Str::substr($file, 16, -4); @endphp
        @php $fileHandle = fopen(storage_path("app/" . $file), "r"); @endphp
        @php $firstLine = fgets($fileHandle); @endphp


        <li><a href="{{ "/blogs/" . $slug }}">{{$firstLine}}</a></li>
        
      @endforeach
    <ul>

  </div>
</main>


@endsection