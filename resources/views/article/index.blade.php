@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Ini Halaman Article</h1>
            @foreach ($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h3>{{ $article->title}}</h3>
                <h5>{{ $article->subject}}</h5>
                <a href="/article/{{$article->id}}/edit" class="btn btn-secondary">Edit</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-2"></div>
    </div>


    <div class="pagination">
        {{$articles->links()}}
    </div>
@endsection