@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Articles</h1>
    </div>
    <div class="col-md-6">
        <a href="{{route('article.index')}}" class="btn btn-md btn-primary float-sm-right"><i
                class="fa fa-arrow-left"></i> Back</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{route('article.update', $article->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{$article->judul}}">
                    </div>

                    <div class="form-group">
                        <label for="content">Isi</label>
                        <input type="text" name="isi" class="form-control" value="{{$article->isi}}">
                    </div>

                    <div class="form-group">
                        <label for="content">Tags: dipisahkan dengan tanda koma (,) </label>
                        <input type="text" name="Tag" class="form-control" value="{{$article->tag}}">
                    </div>
                    <button type="submit" class="btn btn-sm btn-block btn-primary">Update</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection