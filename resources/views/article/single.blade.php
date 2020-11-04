@extends('layouts.app')

@section('title')
    Read Article
@endsection

@section('content')
<h1>{{$article->title}}</h1>
<p>{{$article->subject}}</p>
<div class="row ml-1">
<a href="/article/{{$article->id}}/edit" class="btn btn-secondary">Edit</a>
<form action="/article/{{$article->id}}" method="POST">
@csrf
@method('DELETE')
<button class="btn btn-danger">Hapus</button>
</form>
</div>
<a href="/article" class="btn btn-dark ">Kembali ke Halaman Awal</a>
@include('layouts.footer') 
@endsection

