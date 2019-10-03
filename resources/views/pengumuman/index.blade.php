@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">list Pengumuman</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border='2'>
                        <tr>
                            <td>ID</td>
                            <td>Judul</td>  
                            <td>Isi</td>
                            <td>User_id</td> 
                            <td>Create</td>
                            <td>Update</td>
                            <td>Kategori_pengumuman_id</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listPengumuman as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->judul !!}</td>
                            <td>{!! $item->isi !!}</td>
                            <td>{!! $item->users_id !!}</td>
                            <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                            <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                            <td>{!! $item->kategori_pengumuman_id!!}</td>
                            <td>
                                <a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-sm btn-primary">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
