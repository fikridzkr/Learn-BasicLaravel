@extends('layouts.app')
@section('title')
    Article Page
@endsection

@section('content')
<h1>Ini Halaman Article</h1>
@foreach ($articles->chunk(3) as $articleChunk)
    <div class="row">
        @foreach ($articleChunk as $article)
        <div class="col card mb-2 ml-1 mr-1">
        <img src="/image/{{$article->thumbnail}}" class="card-img-top" alt="thumbnail">
            <div class="card-body">
                <h3>{{ ucfirst($article->title)}}</h3>
            <h5>{{ $article->subject}}</h5>
            <a href="/article/{{$article->slug}}" class="btn btn-secondary btn-sm stretched-link">Baca</a>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <div class="pagination">
        {{$articles->links()}}
    </div>

    @include('layouts.footer')
@endsection