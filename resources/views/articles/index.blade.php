@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Articles</h1>
    </div>
    <div class="col-md-6">
        <a href="{{route('article.create')}}" class="btn btn-md btn-primary float-sm-right">Add Article</a>
    </div>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" collspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @forelse ($articles as $article)
                    <tr>

                        <td>{{ $no++ }}</td>
                        <td>{{ $article->judul }}</td>
                        <td>{{ $article->isi }}</td>
                        <td>
                            <a href="{{route('article.edit', $article->id)}}" class="btn btn-sm btn-info"><i
                                    class="fas fa-pencil-alt"></i></a>

                            <a href="{{route('article.show', $article->id)}}" class="btn btn-sm btn-warning d-inline"><i
                                    class="fa fa-eye"></i></a>

                            <form action="{{route('article.destroy', $article->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type=" submit" class="btn btn-sm btn-danger"><i
                                        class=" fa fa-trash"></i></button>
                            </form>
                        </td>

                    </tr>
                    @empty
                    <tr>

                        <td colspan="4" class="text-center">Data Not Found</td>

                    </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush