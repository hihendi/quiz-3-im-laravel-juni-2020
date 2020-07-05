@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Add Articles</h1>
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
                <form action="{{route('article.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Type...">
                    </div>

                    <div class="form-group">
                        <label for="content">Isi</label>
                        <input type="text" name="isi" class="form-control" placeholder="Type...">
                    </div>
                    <div class="form-group">
                        <label for="content">Tags: </label>
                        <input type="text" name="Tag" class="form-control"
                            placeholder="Tags dipisahkan dengan tanda koma (,)">
                    </div>
                    <button type="submit" class="btn btn-sm btn-block btn-primary">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection