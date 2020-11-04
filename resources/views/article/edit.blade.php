@extends('layouts.app')


@section('content')

<h1 class="text-center">Edit Artikel </h1>

<form action="/article/{{$article->id}}" class="m-5" method="POST">
    @csrf
    @method('PUT')

    <x-input field="title" label="judul" type="text" placeholder="Tulis Judul ..."
    value="{{$article->title}}"/>
    <x-textarea field="subject" label="Subject" value="{{$article->subject}}"/>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

