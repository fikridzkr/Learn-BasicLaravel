@extends('layouts.app')


@section('content')

<h1 class="text-center">Edit Artikel </h1>

<form action="/article/{{$article->id}}" class="m-5" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Judul</label>
      <input type="text" class="form-control" id="title" name="title" value="{{old('title') ? old('title') : $article->title}}">
    </div>
    @error('title')
      <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label for="subject">Subject</label>
      <textarea name="subject" id="subject" rows="3" class="form-control">{{old('subject') ? old('subject') : $article->subject}}</textarea>
    </div>
    @error('subject')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

