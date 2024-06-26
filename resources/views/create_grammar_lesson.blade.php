@extends('layouts.layout')

@section('title')
 - Create Grammar Lesson
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->
@endsection


@section('content')




<script src="/tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>

<script>
      tinymce.init({
        selector: '#content',
        plugins: 'table',
      });
    </script>
  </head>


<form class="bg-light p-5 flex flex-col"
    action="/admin/grammar/create"
    method="POST">

    @csrf

    <div class="my-3 col-12">
        <label for="title">Grammar Topic</label>
        <input type="text"
            class="form-control "
            name="title"
            id="title">
    </div>

    <div class="my-3 col-12">
        <label for="title">Grammar Lesson</label>
        <textarea
            class="form-control "
            name="content"
            id="content"></textarea>
    </div>

    <div class="col-12">
        <input class="btn btn-primary" type="submit">
    </div>
</form>

@isset($grammar_files)

<div class="bg-light rounded p-5 my-5">
      <ul>
      @foreach($grammar_files as $grammar_file)

      @php 
        $grammar_topic = substr($grammar_file, 13);;
        $firstPeriodPos = strpos($grammar_topic, '.');
        $grammar_topic = substr($grammar_topic, 0, $firstPeriodPos);

      @endphp 


        <li> <a href="/admin/grammar/edit/{{$grammar_topic}}"> {{ $grammar_file}}</a> </li>
      @endforeach
    </ul>
</div>

@endisset


@endsection