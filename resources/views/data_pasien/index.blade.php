@extends('layout.app')
@section('title', 'create data pasien')

@section('content')

    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href="{{url('data_pasien/create')}}" class="btn btn-primary">+ Tambah Data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">NIK</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-2">Alamat</th>
                    <th class="col-md-2">Hp</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                </tr> @php $i = 1; @endphp @foreach ($data as $r)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $r->nik }}</td>
                        <td>{{ $r->nama }}</td>
                        <td>{{ $r->alamat }}</td>
                        <td>{{ $r->hp }}</td>
                        <td> <a href="data_pasien/{{ $r->nik }}/edit" class="btn btn-warning btn-sm">Edit
                            
                        </a> <a
                                href="data_pasien/{{ $r->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr> @php $i++; @endphp @endforeach
            </tbody>
        </table>

    </div>
@endsection
