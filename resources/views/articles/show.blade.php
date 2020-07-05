@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Detail Articles</h1>
    </div>
    <div class="col-md-6">
        <a href="{{route('article.index')}}" class="btn btn-md btn-primary float-sm-right"><i
                class="fa fa-arrow-left"></i> Back</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <h4 class="card-header">{{ $article->judul }}</h4>
                <div class="card-body">
                    <small class="card-text">Slugs: {{$article->slug }} </small>
                    <p class="card-text">{{ $article->isi }}</p>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-text">Created At : <strong>{{ $article->created_at }}</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="card-text float-sm-right">Tags:
                                @foreach (explode(',', $article->tag) as $tag)
                                <span class="badge badge-pill badge-success">{{$tag}}</span>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection