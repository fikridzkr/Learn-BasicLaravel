@extends('layouts.app')


@section('content')

<h1 class="text-center">Edit Artikel </h1>

<form action="/article/{{$article->id}}" class="m-5" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <x-input field="title" label="judul" type="text" placeholder="Tulis Judul ..."
    value="{{$article->title}}"/>
    <x-textarea field="subject" label="Subject" value="{{$article->subject}}"/>
    @if ($article->thumbnail)
        <img src="/image/{{$article->thumbnail}}" width="150">
      @else
      <p>Kamu belum mengupload gambar</p>
    @endif
      <x-inputfile />
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

