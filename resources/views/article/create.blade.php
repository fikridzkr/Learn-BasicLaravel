@extends('layouts.app')
@section('title')
    Create Article
@endsection

@section('content')

<h1 class="text-center">Buat Artikel Baru</h1>

<form action="/article" class="m-5" method="POST" enctype="multipart/form-data">
    @csrf
    <x-input field="title" label="judul" type="text" placeholder="Tulis Judul ..."/>
    <x-textarea field="subject" label="Subject"/>
    <x-inputfile />


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

