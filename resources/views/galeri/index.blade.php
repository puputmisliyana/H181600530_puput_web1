@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">list Galeri</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border='2'>
                        <tr>
                            <td>ID</td>
                            <td>Nama</td>  
                            <td>Keterangan</td>
                            <td>Path</td> 
                            <td>User_id</td> 
                            <td>Create</td>
                            <td>Update</td>
                            <td>Kategori_galeri_id</td>
                        </tr>
                        @foreach($listGaleri as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->keterangan !!}</td>
                            <td>{!! $item->path !!}</td>
                            <td>{!! $item->users_id !!}</td>
                            <td>{!! $item->created_at!!}</td>
                            <td>{!! $item->updated_at!!}</td>
                            <td>{!! $item->kategori_galeri_id!!}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
