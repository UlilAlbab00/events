@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('activity.create')}}" class="btn btn-outline-primary">Tambah Kegiatan</a>
            </div>

            <div class="card border-0 shadow">
                <div class="px-3 py-3">
                    <h4 class="text muted">Master Kegiatan</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode kegiatan</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Informasi</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>siapa</td>
                                <td>rondasiang</td>
                                <td>08/03/20</td>
                                <td>transformasi</td>
                                <td>ada apa dengan mu</td>
                                <td>
                                    <a href="" class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection